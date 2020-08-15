using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Navigation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;


namespace hero
{
    public class ball_M1 : ball_M
    {
 
        public ball_M1(Vector2 loc)
        {
            Ball = new TARY_VIMG(GamePage.picBall, loc);
        }



    }
}
