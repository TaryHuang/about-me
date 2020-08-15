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
    public class ball_F1 : ball_IF
    {
        public TARY_VIMG Ball;
        public float ADD_X= 0 ;//發射的角度
        public float ADD_Y = 5.5f;//發射的速度


        public ball_F1(Texture2D img,Vector2 loc)
        {
            loc.Y -= 10;
            Ball = new TARY_VIMG(img,loc);

            Ball.CenterPoint = true;

        }
        public ball_F1(Texture2D img, Vector2 loc, float add_y)
        {
            loc.Y -= 10;
            ADD_Y = add_y;
            Ball = new TARY_VIMG(img, loc);
            Ball.CenterPoint = true;
        }



        public void update()
        {
            Ball.X -= ADD_X;
            Ball.Y -= ADD_Y;
        }

        public void Draw(SpriteBatch P)
        {

            Ball.draw(P);

        }

        public bool life()
        {
            if (Ball.Y >= 810 || Ball.Y <= -10 || Ball.X >= 490 || Ball.X <= -10)
            {
                return false;
            }else{
                return true;
            }
        }




        public BoundingSphere H
        {
            get
            {
                return Ball.H;
            }
        }

        public bool deleteBall(bool[] BL)
        {
            //用不到
            return false;
        }

        //無用到
        public BoundingSphere[] H3
        {
            get
            {
                return new BoundingSphere[] { Ball.H, Ball.H, Ball.H };
            }
        }
    }
}
