using System;
using System.Collections.Generic;
using System.Net;
using System.Windows.Controls;
using System.Windows.Navigation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;
namespace hero
{
    public class LV15 : LV0
    {

        public LV15()
        {
            GROUP = 1;
        }

        public override List<MONSTER_IF> getMonster(int group)
        {
            BOX.Clear();
            switch (group)
            {
                case 1: R1(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A1", new BOSS7(new Vector2(50, 500)), 1);
            MakeMonster("C1", new MONSTER7_A(new Vector2(0, 0)), 5 + (5 * GamePage.HERO_S));
        }












    }
}
