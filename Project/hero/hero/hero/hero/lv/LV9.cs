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
    public class LV9 : LV0
    {

        public LV9()
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
            Time = 550;//下一波攻擊時間
            MakeMonster("A2", new MONSTER1_B(new Vector2(0, 0)), 10);
            MakeMonster("B1", new MONSTER1_C(new Vector2(0, 200)), 9);
            MakeMonster("B1", new MONSTER1_C(new Vector2(0, 300)), 9);
            MakeMonster("A2", new MONSTER1_B(new Vector2(0, 500)), 10);

            MakeMonster("B1", new MONSTER7_C(new Vector2(50, 400)), 3);
            MakeMonster("B1", new MONSTER7_C(new Vector2(350, 400)), 3);

        }











        public void R2()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("B1", new MONSTER5_B(new Vector2(100, 0)), 2 + GamePage.HERO_S);
            
        }


        public void R3()
        {
            Time = 200;//下一波攻擊時間

            MakeMonster("A1", new BOSS2(new Vector2(350, -800)), 1);
            MakeMonster("A1", new MONSTER4_C(new Vector2(20, 200)), 2 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER41_B(new Vector2(350, 200)), 2);
            MakeMonster("A2", new MONSTER5(new Vector2(100, 0)), 10 + GamePage.HERO_S);
        }


    }
}
