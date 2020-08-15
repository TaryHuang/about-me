using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class Zvbox : Box
    {

        BoundingSphere H = new BoundingSphere();//感應器
        Texture2D pic;
        Vector2 pos1;
        int type = 0;//移動時的屬性  0=代表左右移動,1=上下
        int vtype = 5;//移動時速度 5  10  
        int ztype = 5;//移動多少 就往方向  
        int nV = 0;//目前位移狀況  
        int nL = 0;//目前位移方向  
        int B=1;//是否放大

        //z1=移動方式屬性,z2=移動速度,z3=可移動次數後往返
        public Zvbox(Texture2D pic1, Vector2 p1, int b, int z1, int z2, int z3,int z4)
        {
            pic = pic1;//圖片
            pos1 = p1;
            B = b;
            type = z1;
            vtype = z2;
            ztype = z3;
            nV = z4;


            H.Radius = (pic.Width*B) / 2;//設半徑
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
            H.Center = new Vector3(pos1.X + (pic.Width*B) / 2, pos1.Y + (pic.Height*B) / 2, 0f);
            //H.Min = new Vector3(pos1.X, pos1.Y  ,0);
            //H.Max = new Vector3(pos1.X + pic.Width*B  ,pos1.Y + pic.Height*B , 0);
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

            switch (type)
            {
                case 0: type0() ; break;
                case 1: type1(); break;
                case 2: type2(); break;
            }

            Haction();
        }



        public void type0(){

            if(ztype==nL){
                if (nV == 0)
                {
                    nV = 1;
                }
                else
                {
                    nV = 0;
                }
                nL = 0;
            }


            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            if (nV == 0)
            {
                pos1.X += vtype;
            }
            else
            {
                pos1.X -= vtype;
            }
            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            nL++;     
        }



        public void type1()
        {

            if (ztype == nL)
            {
                if (nV == 0)
                {
                    nV = 1;
                }
                else
                {
                    nV = 0;
                }
                nL = 0;
            }


            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            if (nV == 0)
            {
                pos1.Y += vtype;
            }
            else
            {
                pos1.Y -= vtype;
            }
            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            nL++;     
        }





        public void type2()
        {

            if (ztype == nL)
            {
                if (nV == 0)
                {
                    nV = 1;
                }else if(nV==1)
                {
                    nV = 2;
                }else if(nV==2)
                {
                    nV = 3;
                }else{
                    nV = 0;
                }


                nL = 0;
            }


            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

            switch(nV){
                case 0 : pos1.Y += vtype;break;
                case 1 : pos1.X += vtype;break;
                case 2 : pos1.Y -= vtype;break;
                case 3 : pos1.X -= vtype;break;
            }
            //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
            nL++;
        }





        public bool CUPDATE()
        {
            //代表此物件不會有UPDATE功能;
            return true;
        }
    }
}
