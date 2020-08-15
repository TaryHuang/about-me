using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Devices.Sensors;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Input;
using Microsoft.Xna.Framework.Input.Touch;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class Zbox2 :Box
    {
        Zbox[] B;

        public Zbox2(int x,int y,int z,bool L)
        {

            B = new Zbox[z];


            for (int i = 0; i < B.Count();i++ )
            {
                if (L)
                {
                    B[i] = new Zbox(Game1.picZ3, new Vector2(x + Game1.picZ3.Width * i, y + Game1.picZ3.Height * i), 1);
                }
                else
                {
                    B[i] = new Zbox(Game1.picZ3, new Vector2(x - Game1.picZ3.Width * i, y + Game1.picZ3.Height * i), 1);
                }
            }//for
        }




        //是否碰撞
        public bool Match(BoundingBox A)
        {

            for (int i = 0; i < B.Count(); i++)
            {
                if (B[i].H.Intersects(A))
                {
                    return true;
                }
            }
            return false;
        }



        //是否碰撞
        public bool Match(BoundingSphere A)
        {
            for (int i = 0; i < B.Count(); i++)
            {
                if (B[i].H.Intersects(A))
                {
                    return true;
                }
            }
            return false;
        }


        public void Draw()
        {
            for (int i = 0; i < B.Count(); i++)
            {
                B[i].Draw();
            }
        }






        public void UPDATE()
        {

        }


        public bool CUPDATE()
        {
            //代表此物件不會有UPDATE功能;
            return false;
        }
    }
}
