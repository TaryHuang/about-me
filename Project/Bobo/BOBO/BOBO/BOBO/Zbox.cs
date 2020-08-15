using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class Zbox :Box
    {

        public BoundingBox H= new BoundingBox();//感應器
        Texture2D pic;
        Vector2 pos1;
        int B=1;//是否放大
        public Zbox(Texture2D pic1, Vector2 p1,int b)
        {
            pic = pic1;//圖片
            pos1 = p1;

            B = b;


            Haction();
        }


        public void Draw()
        {
            

            if(B==1){
                Game1.P.Draw(pic, pos1,Color.White);
            }else{
                Game1.P.Draw(pic,pos1, null, Color.White, 0, new Vector2(0, 0), B, SpriteEffects.None, 0);	
            }

        }

        public void Haction()
        {
            H.Min = new Vector3(pos1.X, pos1.Y  ,0);
            H.Max = new Vector3(pos1.X + pic.Width*B  ,pos1.Y + pic.Height*B , 0);
            
        }


        //是否碰撞
        public bool Match(BoundingBox A)
        {
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
