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
    public class LV12 : LV0
    {

        public LV12()
        {
            GROUP = 3;
        }

        public override List<MONSTER_IF> getMonster(int group)
        {
            BOX.Clear();
            switch (group)
            {
                case 1: R1(); break;
                case 2: R2(); break;
                case 3: R3(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 60;//下一波攻擊時間
            MakeMonster("C1", new MONSTER5_A(new Vector2(0, 0)), 2);
            MakeMonster("C1", new MONSTER41_A(new Vector2(0, 0)), 1);
        }

        public void R2()
        {
            Time = 60;//下一波攻擊時間
            MakeMonster("C1", new MONSTER5_B(new Vector2(0, 0)), 2);
        }


        public void R3()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER41_A(new Vector2(0, 0)), 1+GamePage.HERO_S);
            MakeMonster("A1", new BOSS3(new Vector2(0, 100)), 1);
        }

    }
}
