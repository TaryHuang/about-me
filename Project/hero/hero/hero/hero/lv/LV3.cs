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
    public class LV3 : LV0
    {

        public LV3()
        {
            GROUP = 5;
        }

        public override List<MONSTER_IF> getMonster(int group)
        {
            BOX.Clear();
            switch (group)
            {
                case 1: R1(); break;
                case 2: R2(); break;
                case 3: R3(); break;
                case 4: R4(); break;
                case 5: R5(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("A2", new MONSTER3(new Vector2(300,300)), 3);

            for (int i = 0; i < 15; i++)
            {
                MONSTER11 MMM = new MONSTER11(new Vector2(100, -60 * i));
                MMM.Yn = 250;

                MMM.N2 = 120;
                MMM.ADD_X2 = 1f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }
        }











        public void R2()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("A1", new MONSTER4(new Vector2(50, 200)), 5);
            MakeMonster("A1", new MONSTER41(new Vector2(50, 100)), 5);
        }


        public void R3()
        {
            Time = 300;//下一波攻擊時間

            MakeMonster("A1", new MONSTER2(new Vector2(50, 0)), 3);
            MakeMonster("A1", new MONSTER2(new Vector2(300, 150)), 3);

        }

        public void R4()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("B1", new MONSTER4(new Vector2(200, 0)), 3 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER51_C(new Vector2(400, 0)), 4);
        }


        public void R5()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A1", new BOSS1(new Vector2(50, 150)), 1);
        }

    }
}
