using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class ZLine : Box
    {
        
        BoundingBox H= new BoundingBox();//感應器
        Texture2D pic;
        Vector2 pos1, pos2;
        Color colors;
        int R;//多大
        int V;//線的感應在家多少
        public ZLine(Texture2D pic1,Vector2 p1, Vector2 p2)
        {
            pic = pic1;//圖片
            pos1 = p1;
            pos2 = p2;
            R = 2;
            
            colors = Color.Black;
            


            //判定此線 是否為直線
            if ((p1.X != p2.X && p1.Y == p2.Y) || (p1.X == p2.X && p1.Y != p2.Y))
            {
                if (p1.X == p2.X)
                {
                    V = 0;
                    if (p1.Y <= p2.Y)
                    {
                        H.Min = new Vector3(p1.X - V, p1.Y - V, 0);
                        H.Max = new Vector3(p2.X + V, p2.Y + V, 0);
                    }
                    else
                    {
                        H.Min = new Vector3(p2.X - V, p2.Y - V, 0);
                        H.Max = new Vector3(p1.X + V, p1.Y + V, 0);
                    }//if
                }
                else
                {
                    V=0;
                    if (p1.X <= p2.X)
                    {
                        H.Min = new Vector3(p1.X - V, p1.Y - V, 0);
                        H.Max = new Vector3(p2.X+ V, p2.Y+ V, 0);
                    }
                    else
                    {
                        H.Min = new Vector3(p2.X-V, p2.Y- V, 0);
                        H.Max = new Vector3(p1.X+ V, p1.Y+ V, 0);
                    }//if
                }//if

            }else{
                H.Min = new Vector3(p1.X, p1.Y, 0);
                H.Max = new Vector3(p2.X, p2.Y, 0);
            }

            

    
        }


        public void setColor(Color C){
            colors = C;
        }


        public void setR(int r)
        {
            R = r;
        }

        public void Draw()
        {

            float v1 = (float)Math.Atan2(pos1.Y - pos2.Y, pos1.X - pos2.X);
            float v2 = Vector2.Distance(pos1, pos2);




            Game1.P.Draw(pic, new Rectangle((int)pos2.X, (int)pos2.Y, (int)v2, R), null, colors, v1, Vector2.Zero, SpriteEffects.None, 0);
        }





        //是否碰撞
        public bool Match(BoundingBox A){


            if (H.Intersects(A))
            {
                return true;
            }

            return false;
        }




        //是否碰撞
        public bool Match(BoundingSphere A)
        {
            if (H.Intersects(A))
            {
                return true;
            }

            return false;
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
