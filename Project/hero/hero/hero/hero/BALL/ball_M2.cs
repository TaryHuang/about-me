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
    public class ball_M2 : ball_M
    {
        public Texture2D ColorStar;

        List<TARY_VIMG> Stars = new List<TARY_VIMG>();
        public ball_M2(Vector2 loc)
        {
            Ball = new TARY_VIMG(GamePage.picBallM2, loc);
            Ball.CenterPoint = true;

            loss = 4;//扣多少血
            ColorStar = GamePage.picStar8;
            this.Ball.ImgNum = 1;

        }

        public override void update()
        {
            base.update();


            for (int i = 0; i < GamePage.randObj.Next(0,3);i++ )
            {
                TARY_VIMG star = new TARY_VIMG(ColorStar, new Vector2(Ball.centerLoc.X + GamePage.randObj.Next((int)(-Ball.Width), 0), Ball.centerLoc.Y + GamePage.randObj.Next((int)(-Ball.Height), 0)));
                star.Size = GamePage.randObj.Next(1, 4);
                Stars.Add(star);
            }
        }


        public override void Draw(SpriteBatch P)
        {
            base.Draw(P);


            for (int i = 0; i < Stars.Count; i++)
            {
                if (Stars[i].Alpha <= 0)
                {
                    Stars.RemoveAt(i);
                }
                else
                {
                    Stars[i].Alpha -= 60;
                }

                Stars[i].draw(P);
            }
        }
    }
}
