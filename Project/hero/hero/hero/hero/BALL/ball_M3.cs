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
    public class ball_M3 : ball_M2
    {

        List<TARY_VIMG> Stars = new List<TARY_VIMG>();

        public ball_M3(Vector2 loc)
            : base(loc)
        {
            Ball = new TARY_VIMG(GamePage.picBallM3, loc);
            Ball.CenterPoint = true;

            loss = 2;//扣多少血

            this.Ball.ImgNum = 1;

        }

 
    }
}
