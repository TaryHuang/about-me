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
    public class ball_Main : ball_IF
    {
        List<ball_F1> balls = new List<ball_F1>();


        public ball_Main(Vector2 loc, int N)
        {

            if (N == 1)
            {
                balls.Add(new ball_F1(GamePage.picBallA[1], loc, 5f));
                return;
            }



            if (N == 2)
            {
                for (int i = 0; i < 2; i++)
                {
                    balls.Add(new ball_F1(GamePage.picBallA[1], loc, 5f));
                }
                balls[0].Ball.X += 15f;
                balls[1].Ball.X -= 15f;
                return;
            }



            if (N == 3)
            {
                for (int i = 0; i < 3; i++)
                {
                    balls.Add(new ball_F1(GamePage.picBallA[2], loc, 5f));
                }
                balls[0].Ball.X += 20f;
                balls[1].Ball.X -= 20f;
                return;
            }



            if (N == 4)
            {
                for (int i = 0; i < 4; i++)
                {
                    balls.Add(new ball_F1(GamePage.picBallA[2], loc, 5f));
                }
                balls[0].Ball.X += 15f;
                balls[1].Ball.X -= 15f;
                balls[2].Ball.X += 30f;
                balls[3].Ball.X -= 30f;
                return;
            }
        }




        public void update()
        {
            for (int i = 0; i < balls.Count(); i++)
            {
                balls[i].update();
            }   
        }

        public void Draw(SpriteBatch P)
        {
            for (int i = 0; i < balls.Count(); i++)
            {
                balls[i].Draw(P);
            }   

        }

        public bool life()
        {
            bool t = false;
            for (int i = balls.Count()-1; i >=0 ;i-- )
            {
                if (!balls[i].life())
                {
                    balls.RemoveAt(i);
                }
                else
                {
                    t = true;
                }
            }
            return t;
        }


        //這個不用理它 ↓多餘的
        public BoundingSphere H
        {
            get
            {
                return balls[0].H;
            }
        }



        //重點感應器
        public BoundingSphere[] H3
        {
            get
            {
                BoundingSphere[] bl=new BoundingSphere[balls.Count];
                for (int i = 0; i < bl.Count();i++ )
                {
                    bl[i] = balls[i].H;
                }
                return bl;
            }
        }

        public bool deleteBall(bool[] BL)
        {
            //如果陣列的怪中 都消失  就會傳true

            bool t = true;

            for (int i = balls.Count()-1; i >= 0; i--)
            {
                if (BL[i+1])
                {
                    balls.RemoveAt(i);
                }
                else
                {
                    t = false;
                }
            }
            

            return t;
        }



    }
}
