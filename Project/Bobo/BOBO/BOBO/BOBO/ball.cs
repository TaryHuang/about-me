using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class ball
    {
        Texture2D pic;
        Vector2 pos1;

        public BoundingSphere H = new BoundingSphere();//感應器
        public ball(Texture2D p1,Vector2 pos1)
        {
            pic = p1;
            setPos(pos1);

            H.Radius = p1.Width/2;//設半徑
            Haction();
        }


        public void setPos(Vector2 p1)
        {
            pos1=p1;
        }

        public void setAddX(int num)
        {
            pos1 = new Vector2(pos1.X, pos1.Y + num);
        }

        public void setAddY(int num)
        {
            pos1 = new Vector2(pos1.X + num, pos1.Y);
        }




        public bool banGround(){
            if (pos1.X < -20 || pos1.X >800+20)
            {
                return true;
            }

            if (pos1.Y < -20 || pos1.Y > 400+20)
            {
                return true;
            }

            return false;
        }



        public void Draw()
        {
            Haction();


            Game1.P.Draw(pic, pos1, Color.White);
        }

        public void Haction()
        {
            H.Center = new Vector3(pos1.X + pic.Width / 2, pos1.Y + pic.Height / 2, 0f);
            //H.Min = new Vector3(pos1.X, pos1.Y, 0);
            //H.Max = new Vector3(pos1.X + pic.Width, pos1.Y + pic.Height, 0);
        }


    }
}
