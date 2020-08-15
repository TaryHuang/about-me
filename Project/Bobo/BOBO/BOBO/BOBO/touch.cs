using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;

namespace BOBO
{
    class touch
    {
        public int GV = 0;
        public bool Stop = false;
        public Texture2D pic;
        public Vector2 pos1;
        public touch(Texture2D p1, Vector2 pos1)
        {
            pic = p1;
            setPos(pos1);
        }

        public void setPos(Vector2 p1)
        {
            pos1=p1;
        }



        //判定是否手已經觸擊
        public bool touchXY(float x, float y)
        {
            if (x > this.pos1.X && x < this.pos1.X + pic.Width &&
                y > this.pos1.Y && y < this.pos1.Y + pic.Height)
            {
                return true;
            }


            return false;
        }



        public void Draw()
        {
            Game1.P.Draw(pic, pos1, Color.White);
        }


    }
}
