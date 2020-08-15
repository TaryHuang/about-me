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
    class Zbox3 : Box
    {



        public BoundingBox H= new BoundingBox();//感應器
        Texture2D pic;
        Vector2 pos1;
        int S=20;//目前無感應時幾秒後 感應器啟動
        int E = 50;//目前有感應時幾秒後 感應器關閉
        int B = 1;//放多大
        bool T;//初始時 是啟動 還是關閉的
        int Tbox = 0;//暫存器

        public Zbox3(Texture2D pic1, Vector2 p1,bool t,int b ,int s,int e)
        {
            pic = pic1;//圖片
            pos1 = p1;

            T = t;
            S = s;
            E = e;
            B = b;


            Haction();
        }


        public void Draw()
        {
            
            if(T){

                if(B==1){
                    Game1.P.Draw(pic, pos1,Color.White);
                }else{
                    Game1.P.Draw(pic,pos1, null, Color.White, 0, new Vector2(0, 0), B, SpriteEffects.None, 0);	
                }

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
            if (!T)
            {
                return false;
            }





            if (H.Intersects(A))
            {
                return true;
            }

            return false;
        }




        //是否碰撞
        public bool Match(BoundingSphere A)
        {
            if (!T)
            {
                return false;
            }


            if (H.Intersects(A))
            {
                return true;
            }

            return false;
        }



        public void UPDATE()
        {
            Tbox++;

            if(T){
                if(Tbox>E){
                    T=false;
                    Tbox = 0;
                }
            }else{

                if(Tbox>S){
                    T = true;
                    Tbox = 0;
                }

            }
        }


        public bool CUPDATE()
        {
            //代表此物件不會有UPDATE功能;
            return true;
        }
    }
}
