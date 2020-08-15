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
    public class ball_M : ball_IF
    {
        public int CTYPE = 1;
        public TARY_VIMG Ball;
        public float ADD_X= 0 ;//發射的角度
        public float ADD_Y = 2f+((GamePage.HERO_LV / 2) * 0.15f);//發射的速度
        public int loss = 1;//扣多少血


        public ball_M(Texture2D img, Vector2 loc)
        {
            Ball = new TARY_VIMG(img,loc);
        }

        public ball_M()
        {
        }


        public virtual void update()
        {
            Ball.X += ADD_X;
            Ball.Y += ADD_Y;
        }

        public virtual void Draw(SpriteBatch P)
        {

            Ball.draw(P);

        }




        public bool life()
        {
            if (Ball.Y >= 820 || Ball.Y <= -250 || Ball.X >= 500 || Ball.X <= -20)
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














        //以下用不到 因為與英雄子彈繼承同個INTERFACE
        //故要實作 但無須使用它

        public bool deleteBall(bool[] BL)
        {
            //用不到
            return false;
        }


        public int Ctype
        {
            get
            {
                return CTYPE;
            }
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
