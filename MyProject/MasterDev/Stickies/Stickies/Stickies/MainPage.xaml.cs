using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using TARY_Library_Silverlight;
using System.Windows.Media.Imaging;
using System.IO.IsolatedStorage;
using Microsoft.Phone.Shell;
namespace Stickies
{
    public partial class MainPage : PhoneApplicationPage
    {
        // 建構函式
        TARY_Library_Silverlight.Popup.microPhoneForm MicroPhoneMessage;
        public static bool boolMicroPhone = true;
        ButtonColor BtnColor, BtnColor2;
        ButtonDate BtnDate;
        TextBoxR myText;
        int ID=-1;
        string imgUri;
        
        public static DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

        WriteableBitmap bitmap;

        bool InitPage = false;
        MTable MMM;


        public MainPage()
        {
            MicroPhoneMessage = new TARY_Library_Silverlight.Popup.microPhoneForm(this);
            

            InitializeComponent();
            MicroPhoneMessage.Visibility = System.Windows.Visibility.Collapsed;
            LayoutRoot.Children.Add(MicroPhoneMessage);

            if (tDBHandler.DatabaseExists() == false)
            {

                tDBHandler.CreateDatabase();
                tDBHandler.SubmitChanges();
            }


            BtnDate = new ButtonDate(this, DateTime.Now);
            BtnDate.Loaded += new RoutedEventHandler(BtnDate_Loaded);
            body.Children.Add(BtnDate);


            BtnColor = new ButtonColor(this,Color.FromArgb(255,59,210,216));
            BtnColor.Loaded += new RoutedEventHandler(BtnColor_Loaded);
            body.Children.Add(BtnColor);


            BtnColor2 = new ButtonColor(this, Color.FromArgb(255, 255, 255, 255));
            BtnColor2.Loaded += new RoutedEventHandler(BtnColor2_Loaded);
            body.Children.Add(BtnColor2);




            myText = new TextBoxR(100,"隨便寫寫..");
            myText.Height = 300;
            myText.FontSize = 32;
            myText.TextWrapping = TextWrapping.Wrap;
            myText.LostFocus += new RoutedEventHandler(myText_LostFocus);
            //myText.KeyDown += new KeyEventHandler(myText_KeyDown);
           
            bottom.Children.Add(myText);













        }

        void myText_LostFocus(object sender, RoutedEventArgs e)
        {
            textBody.Text = myText.myText;
        }

        void BtnDate_Loaded(object sender, RoutedEventArgs e)
        {
            //throw new NotImplementedException();
            textDate.Text = BtnDate.Content.ToString();


        }

        void BtnColor2_Loaded(object sender, RoutedEventArgs e)
        {
            textDate.Foreground = BtnColor2.Background;
            textBody.Foreground = BtnColor2.Background;
        }

        void BtnColor_Loaded(object sender, RoutedEventArgs e)
        {
            img.Background = BtnColor.Background;
        }








        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {





            try
            {

                if (InitPage)
                    return;


                ID = Convert.ToInt32(NavigationContext.QueryString["ID"]);


                MMM = (from table in MainPage.tDBHandler.MTable
                              where table.ID == ID
                              select table).First();



                Color B1 = new Color();
                B1.A = (byte)MMM.Bg__A;
                B1.R = (byte)MMM.Bg__R;
                B1.G = (byte)MMM.Bg__G;
                B1.B = (byte)MMM.Bg__B;

                Color B2 = new Color();
                B2.A = (byte)MMM.Font__A;
                B2.R = (byte)MMM.Font__R;
                B2.G = (byte)MMM.Font__G;
                B2.B = (byte)MMM.Font__B;


                BtnColor.Background = new SolidColorBrush(B1);
                BtnColor2.Background = new SolidColorBrush(B2);
                myText.myText = MMM.TEXT;
                BtnDate.Content = MMM.DATE.ToString("yyyy/MM/dd");
                UpdateType();

                (ApplicationBar.MenuItems[0] as ApplicationBarMenuItem).IsEnabled = true;






        
                //取出音訊檔案**********************************

                IsolatedStorageFile isoFile = IsolatedStorageFile.GetUserStoreForApplication();
                IsolatedStorageFileStream myStream = isoFile.OpenFile(MMM.ImgUri, System.IO.FileMode.Open, System.IO.FileAccess.Read);

                byte[] bytes = new byte[myStream.Length];

                myStream.Read(bytes, 0, (int)myStream.Length);
                
                MicroPhoneMessage.Stream.Write(bytes, 0, (int)myStream.Length);
                

                /*
                MicroPhoneTable[] DATA= (from table in MainPage.tDBHandler.MicroPhoneTable
                        where ID == table.MASTERI
                        orderby table.ORD
                        select table).ToArray();


                List<byte> temp = new List<byte>();

                for (int i = 0; i < DATA.Count(); i++)
                {
                    temp.AddRange(DATA[i].Sound);
                }


                MicroPhoneMessage.Stream.SetLength(0);
                MicroPhoneMessage.Stream.Write(temp.ToArray(), 0, temp.Count);
                //**********************************取出音訊檔案
                */







                InitPage = true;
            }
            catch
            {
                InitPage = true;
            }

        }


        void UpdateType()
        {


            textDate.Text = BtnDate.Content.ToString();
            textBody.Text = myText.myText;
            img.Background = BtnColor.Background;
            textDate.Foreground = BtnColor2.Background;
            textBody.Foreground = BtnColor2.Background;
        }





        public void UpdateTile(string Pin)
        {



            imgUri = DateTime.Now.ToString("yyyyMMddHHmmss");
            bitmap = new WriteableBitmap(250, 250);
            bitmap.Render(img, null);
            bitmap.Invalidate();
            var isf = IsolatedStorageFile.GetUserStoreForApplication();
            var filenameF = "/Shared/ShellContent/G_" + imgUri + ".jpg";




            using (var stream = isf.OpenFile(filenameF, System.IO.FileMode.OpenOrCreate))
            {
                bitmap.SaveJpeg(stream, 250, 250, 0, 100);
            }


            
            ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultTitle=@" + Pin+"@"));

            if (TileToFind != null)
            {
                StandardTileData NewTileData = new StandardTileData
                {
                    BackgroundImage = new Uri("isostore:" + filenameF, UriKind.Absolute)
                };

                TileToFind.Update(NewTileData);
            }



















            //******************************************
            MTable M = (from table in MainPage.tDBHandler.MTable
                          where table.ID == ID
                          select table).First();

            M.TEXT = myText.myText;
            M.DATE = Convert.ToDateTime(textDate.Text);
            M.Bg__A = ((SolidColorBrush)(BtnColor.Background)).Color.A;
            M.Bg__R = ((SolidColorBrush)(BtnColor.Background)).Color.R;
            M.Bg__G = ((SolidColorBrush)(BtnColor.Background)).Color.G;
            M.Bg__B = ((SolidColorBrush)(BtnColor.Background)).Color.B;

            M.Font__A = ((SolidColorBrush)(BtnColor2.Background)).Color.A;
            M.Font__R = ((SolidColorBrush)(BtnColor2.Background)).Color.R;
            M.Font__G = ((SolidColorBrush)(BtnColor2.Background)).Color.G;
            M.Font__B = ((SolidColorBrush)(BtnColor2.Background)).Color.B;
            M.ImgUri = imgUri;
            MainPage.tDBHandler.SubmitChanges();
            //******************************************




            MessageBox.Show("資料已更新!");
        }




        private void ApplicationBarIconButton_Click(object sender, EventArgs e)
        {

            Fbox.Focus();
            

        }

        private void Fbox_GotFocus(object sender, RoutedEventArgs e)
        {

            BtnColor.Focus();

            //[更新]***********************
            if (ID != -1)
            {
                UpdateTile(ID.ToString());
                return;
            }
            //***********************[更新]















            imgUri = DateTime.Now.ToString("yyyyMMddHHmmss");
            int IDptr;
            //******************************************
            MTable M = new MTable();
            M.TEXT = myText.myText;
            M.DATE = Convert.ToDateTime(textDate.Text);
            M.Bg__A = ((SolidColorBrush)(BtnColor.Background)).Color.A;
            M.Bg__R = ((SolidColorBrush)(BtnColor.Background)).Color.R;
            M.Bg__G = ((SolidColorBrush)(BtnColor.Background)).Color.G;
            M.Bg__B = ((SolidColorBrush)(BtnColor.Background)).Color.B;

            M.Font__A = ((SolidColorBrush)(BtnColor2.Background)).Color.A;
            M.Font__R = ((SolidColorBrush)(BtnColor2.Background)).Color.R;
            M.Font__G = ((SolidColorBrush)(BtnColor2.Background)).Color.G;
            M.Font__B = ((SolidColorBrush)(BtnColor2.Background)).Color.B;
            M.ImgUri = imgUri;
            MainPage.tDBHandler.MTable.InsertOnSubmit(M);
            MainPage.tDBHandler.SubmitChanges();
            //******************************************



            MTable ERI;
            ERI = (from table in MainPage.tDBHandler.MTable
                   orderby table.ID descending
                   select table).First();

            IDptr = ERI.ID;











            bitmap = new WriteableBitmap(250, 250);
            bitmap.Render(img, null);
            bitmap.Invalidate();

            var isf = IsolatedStorageFile.GetUserStoreForApplication();
            var filenameF = "/Shared/ShellContent/G_" + imgUri + ".jpg";
            using (var stream = isf.OpenFile(filenameF, System.IO.FileMode.OpenOrCreate))
            {
                bitmap.SaveJpeg(stream, 250, 250, 0, 100);
            }




            for (int j = 1; j < 99; j++)
            {
                ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultTitle=@" + j + "@"));
                if (TileToFind == null)
                {
                    StandardTileData NewTileData = new StandardTileData
                    {

                        BackgroundImage = new Uri("isostore:" + filenameF, UriKind.Absolute)
                    };
                    ShellTile.Create(new Uri("/MainPage.xaml?DefaultTitle=@" + j + "@&ID=" + IDptr.ToString(), UriKind.Relative), NewTileData);

                    return;
                }
            }
        }

        private void ApplicationBarMenuItem_Click(object sender, EventArgs e)
        {
            CallPage.CallTaryPage(this);
        }



        private void ApplicationBarMenuItem_Click_2(object sender, EventArgs e)
        {
            MicroPhoneMessage.Show();
        }


        private void PhoneApplicationPage_BackKeyPress(object sender, System.ComponentModel.CancelEventArgs e)
        {
            
            if(MicroPhoneMessage.isShow){

            imgUri = DateTime.Now.ToString("yyyyMMddHHmmss");

            IsolatedStorageFile isf = IsolatedStorageFile.GetUserStoreForApplication();
            var filenameF = "M" + imgUri;




            using (var stream = isf.OpenFile(filenameF, System.IO.FileMode.Create))
            {
                stream.Write(MicroPhoneMessage.Stream.ToArray(), 0, (MicroPhoneMessage.Stream.ToArray()).Count());
                
            }


            MMM.ImgUri = filenameF;
            MainPage.tDBHandler.SubmitChanges();
            //if (isf.FileExists(filenameF)) MessageBox.Show("hi");
                /*
                

                //刪除資料------------------------------------刪除資料

                MicroPhoneTable[] VAR = (from table in MainPage.tDBHandler.MicroPhoneTable
                                       where table.MASTERI == ID
                                       select table).ToArray();

                if (VAR.Count() != 0)
                {
                    MainPage.tDBHandler.MicroPhoneTable.DeleteAllOnSubmit(VAR);
                }
                //刪除資料------------------------------------刪除資料


                

                List<byte> MicroPhoneBytes = (MicroPhoneMessage.Stream.ToArray()).ToList();
                if(MicroPhoneBytes.Count()==0){
                    MainPage.tDBHandler.SubmitChanges();
                    return; //無須存檔
                }
                int BOX_INDEX = (MicroPhoneBytes.Count() / 1000) == 0 ? (MicroPhoneBytes.Count() / 1000) : (MicroPhoneBytes.Count() / 1000) + 1;
                MicroPhoneTable[] BOX = new MicroPhoneTable[BOX_INDEX];




                for (int i = 0; i < BOX.Count(); i++)
                {
                    BOX[i] = new MicroPhoneTable();
                    BOX[i].MASTERI = ID;
                    BOX[i].ORD = i;

                    byte[] bbb;
                    if (i == BOX.Count() - 1)
                        bbb = (MicroPhoneBytes.GetRange(i * 1000, MicroPhoneBytes.Count() % 1000)).ToArray();
                    else
                        bbb = (MicroPhoneBytes.GetRange(i * 1000, 1000)).ToArray();



                    BOX[i].Sound = bbb;


                }


                MainPage.tDBHandler.MicroPhoneTable.InsertAllOnSubmit(BOX);
                
*/
            }
                 
        }

    }
}