using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class passed
    {
        public touch L, L1, L2;
        public passed()
        {

            L = new touch(Game1.picL, new Vector2(100,50));
            L1 = new touch(Game1.picL1, new Vector2(180, 320));


            if (Game1.picGameLv.Count() == Game1.Lv)
            {
                L2 = new touch(Game1.picL3, new Vector2(420, 320));
                L2.Stop = true;
            }
            else
            {
                L2 = new touch(Game1.picL2, new Vector2(420, 320));
            }
        }

        public void Draw(){
                L.Draw();
                L1.Draw();
                L2.Draw();
        }

    }
}
