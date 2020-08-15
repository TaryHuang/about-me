using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework.Graphics;
using Microsoft.Xna.Framework;
namespace BOBO
{
    class BTN
    {
        public Texture2D img;
        public Vector2 loc=new Vector2(0, 0);
        int size = 1;
        public BTN(Texture2D IMG,Vector2 LOC)
        {
            img = IMG;
            loc = LOC;
        }



        public BTN(Texture2D IMG)
        {
            img = IMG;
        }


        public void draw()
        {

            //放大尺寸
            if (size!=1)
                Game1.P.Draw(img, loc, null, Color.White, 0, new Vector2(0, 0), size, SpriteEffects.None, 0);
            else
                Game1.P.Draw(img, loc, Color.White);

        } 


        //判定是否手已經觸擊
        public bool touchXY(float x, float y)
        {
            if (x > this.loc.X && x < this.loc.X + img.Width *size &&
                y > this.loc.Y && y < this.loc.Y + img.Height * size)
            {
                return true;
            }


            return false;
        }

        public void setSize(int num)
        {
            size = num;//放大大小
        }





        public void setIMG(Texture2D IMG)
        {
            img = IMG;
        }
    }
}
