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
using Microsoft.Phone.Shell;
namespace readEnglish
{
    public partial class EnWord : PhoneApplicationPage
    {

        public EnWord()
        {
            InitializeComponent();

            PageTitle.Text = MainPage.SortName;
            Loading();


        }

        void Loading()
        {
            var tEnglishWord = from EnglishWord in MainPage.tDBHandler.EnglishWord
                               where MainPage.Ptr == EnglishWord.CTYPE
                               orderby EnglishWord.EWORD1 ascending
                               select EnglishWord;


            listBody.Items.Clear();
            foreach (EnglishWord TEMP in tEnglishWord)
            {
                EngWordPanel AAA = new EngWordPanel(TEMP.ID,1,TEMP.EWORD1,TEMP.CWORD,"");
                AAA.Hold+=new EventHandler<GestureEventArgs>(AAA_Hold);
                listBody.Items.Add(AAA);
            }//foreach end

        }

        private void ApplicationBarMenuItem_Click(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/DATA_ADD.xaml", UriKind.Relative));
        }

        private void Test_Click(object sender, EventArgs e)
        {
            NavigationService.Navigate(new Uri("/Test.xaml", UriKind.Relative));
        }

        private void PhoneApplicationPage_Loaded(object sender, RoutedEventArgs e)
        {
            Loading();
        }


        void AAA_Hold(object sender, GestureEventArgs e)
        {
            EngWordPanel A = sender as EngWordPanel;

            MessageBoxResult m = MessageBox.Show("您是否要將＂" + A.eng + "＂刪除？", "系統", MessageBoxButton.OKCancel);
            if (m == MessageBoxResult.OK)
            {

                EnglishWord tEngSingle = (from tEng in MainPage.tDBHandler.EnglishWord
                                   where tEng.ID == A.ID
                                   select tEng).First();

                MainPage.tDBHandler.EnglishWord.DeleteOnSubmit(tEngSingle);











                MainPage.tDBHandler.SubmitChanges();
                Loading();
            }
        }



    }



    
}