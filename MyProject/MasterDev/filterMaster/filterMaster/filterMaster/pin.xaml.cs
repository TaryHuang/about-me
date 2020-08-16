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
using Microsoft.Phone.Shell;
using System.IO;
using System.Windows.Media.Imaging;
using System.IO.IsolatedStorage;
namespace filterMaster
{
    public partial class pin : PhoneApplicationPage
    {

        ButtonColor BtnBg, BtnBg2;
        TextBoxR myText;
        PhotoView Board;
        PhotoView Board2;
        WriteableBitmap bitmap, bitmap2;
        BitmapImage Bimg;
        public pin()
        {
            InitializeComponent();

            Board = new PhotoView();
            Board.WIDTH = 200;
            Board.HEIGHT = 200;
            Board.Margin = new Thickness(0,0,0,5);
            Board.VerticalAlignment = System.Windows.VerticalAlignment.Center;
            Board.HorizontalAlignment = System.Windows.HorizontalAlignment.Center;

            Board.Background = new SolidColorBrush(Colors.Red);
            top.Children.Add(Board);

            BtnBg = new ButtonColor(this, Color.FromArgb(255, 255, 0, 0));
            BtnBg.Loaded += new RoutedEventHandler(BtnBg_Loaded);
            body.Children.Add(BtnBg);

            Board2 = new PhotoView();
            Board2.WIDTH = 200;
            Board2.HEIGHT = 200;
            Board2.VerticalAlignment = System.Windows.VerticalAlignment.Center;
            Board2.HorizontalAlignment = System.Windows.HorizontalAlignment.Center;

            Board2.Background = new SolidColorBrush(Colors.Red);
            top.Children.Add(Board2);



            BtnBg2 = new ButtonColor(this, Color.FromArgb(255, 255, 0, 0));
            BtnBg2.Loaded += new RoutedEventHandler(BtnBg2_Loaded);
            body.Children.Add(BtnBg2);





            myText = new TextBoxR(100,"想說的話..");
            myText.TextWrapping = TextWrapping.Wrap;
            myText.Height = 150;
            body.Children.Add(myText);





        }

        void BtnBg_Loaded(object sender, RoutedEventArgs e)
        {
            Board.Background = BtnBg.Background;
        }

        void BtnBg2_Loaded(object sender, RoutedEventArgs e)
        {
            Board2.Background = BtnBg2.Background;
        }



        int IDptr;
        private void button1_Click(object sender, RoutedEventArgs e)
        {
            //新增動態磁磚
            


            

            

            MTable M = new MTable();
      
            M.TEXT = myText.myText;

            MainPage.tDBHandler.MTable.InsertOnSubmit(M);
            MainPage.tDBHandler.SubmitChanges();




                MTable ERI;
                ERI = (from table in MainPage.tDBHandler.MTable
                       orderby table.ID descending
                       select table).First();

                IDptr = ERI.ID;
            bitmap = new WriteableBitmap(200, 200);

            bitmap.Render(Board, null);
            bitmap.Invalidate();
            bitmap2 = new WriteableBitmap(200, 200);
            bitmap2.Render(Board2, null);
            bitmap2.Invalidate();
            /*
            List<byte> BBB = new List<byte>();
            int j = 0;
            for (int i = 0; i < bitmap.Pixels.Count(); i++)
            {
                byte[] pixBytes = BitConverter.GetBytes(bitmap.Pixels[i]);

                BBB.Add(pixBytes[0]);
                BBB.Add(pixBytes[1]);
                BBB.Add(pixBytes[2]);
                BBB.Add(pixBytes[3]);

                j += 4;
            }







            //儲存分割處理--------------------------
            int BOX_INDEX = (BBB.Count() / 1000) == 0 ? (BBB.Count() / 1000) : (BBB.Count() / 1000) + 1;
            ObjPhotoTable[] BOX = new ObjPhotoTable[BOX_INDEX];

            for (int i = 0; i < BOX.Count(); i++)
            {
                BOX[i] = new ObjPhotoTable();
                BOX[i].MASTERI =IDptr;
                BOX[i].ORD = i;

                byte[] bbb;
                if (i == BOX.Count() - 1)
                    bbb = (BBB.GetRange(i * 1000, BBB.Count() % 1000)).ToArray();
                else
                    bbb = (BBB.GetRange(i * 1000, 1000)).ToArray();

                //(((from table in BBB
                //            select table).Skip(i*1000).Take(1000))).ToArray(); 慢
                BOX[i].Photo = bbb;


            }


            MainPage.tDBHandler.ObjPhotoTable.InsertAllOnSubmit(BOX);
            */
        //確認特定的目錄是否存在，如果沒有則需要建立。




            //IsolatedStorage.SaveImageToIsolatedStorage(bitmap, "isostore:/Shared/ShellContent/MyPics.jpg");
            //MainPage.tDBHandler.SubmitChanges();
            var isf = IsolatedStorageFile.GetUserStoreForApplication();
            var filenameF = "/Shared/ShellContent/F_" + IDptr + ".jpg";
            var filenameB = "/Shared/ShellContent/B_" + IDptr + ".jpg";

            using (var stream = isf.OpenFile(filenameF, System.IO.FileMode.OpenOrCreate))
            {
                bitmap.SaveJpeg(stream, 200, 200, 0, 100);
            }

            using (var stream = isf.OpenFile(filenameB, System.IO.FileMode.OpenOrCreate))
            {
                bitmap2.SaveJpeg(stream, 200, 200, 0, 100);
            }

            for (int j = 1; j < 99; j++)
            {
                ShellTile TileToFind = ShellTile.ActiveTiles.FirstOrDefault(x => x.NavigationUri.ToString().Contains("DefaultTitle=@" + j + "@"));
                if (TileToFind == null)
                {


                    //****************************************************


                    StandardTileData NewTileData = new StandardTileData
                    {
                        Title = "",
                        Count = 0,
                        BackTitle = "",
                        BackContent = "",
                        BackBackgroundImage =  new Uri("isostore:" + filenameB, UriKind.Absolute)
                    };


                    NewTileData.BackgroundImage = new Uri("isostore:" + filenameF, UriKind.Absolute);



                    ShellTile.Create(new Uri("/say.xaml?DefaultTitle=@" + j + "@&ID="+IDptr.ToString(), UriKind.Relative), NewTileData);

                    break;

                }//if end

            }//FOR
        }
    }
}