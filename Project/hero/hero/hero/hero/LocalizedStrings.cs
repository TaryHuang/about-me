using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;

namespace hero
{
    public class LocalizedStrings
    {

       public LocalizedStrings() {}


       private static hero.Language.Language localizedResources = new hero.Language.Language();

       public static hero.Language.Language LocalizedResources
       { 
           get { return localizedResources; } 
           
       } 




    }
}
