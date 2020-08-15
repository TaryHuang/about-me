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
    public class LV10 : LV0
    {

        public LV10()
        {
            GROUP = 9;
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
                case 6: R6(); break;
                case 7: R7(); break;
                case 8: R8(); break;
                case 9: R9(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER4_C(new Vector2(-15, 20)), 11);
            MakeMonster("B1", new MONSTER41_B(new Vector2(200, 200)), 3);
        }











        public void R2()
        {
            Time = 800;//下一波攻擊時間
            MakeMonster("B1", new MONSTER1_B(new Vector2(-15, 20)), 11);
            MakeMonster("B1", new MONSTER3_B(new Vector2(200, 200)), 3);
        }


        public void R3()
        {
            Time = 500;//下一波攻擊時間

            MakeMonster("A3", new MONSTER1_B(new Vector2(100, 0)), 3);
            MakeMonster("A3", new MONSTER1_B(new Vector2(100, 100)), 3);
            MakeMonster("A4", new MONSTER1_B(new Vector2(470, 200)), 3);
            MakeMonster("A4", new MONSTER1_B(new Vector2(470, 300)), 3);
            MakeMonster("C1", new MONSTER6_C(new Vector2(0, -500)), 3);
        }

        public void R4()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("B1", new MONSTER1_B(new Vector2(-15, 20)), 11);
            MakeMonster("B1", new MONSTER1_B(new Vector2(200, 200)), 3);
        }




        public void R5()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("A3", new MONSTER5_B(new Vector2(30, 100)), 2);
            MakeMonster("A4", new MONSTER51_B(new Vector2(450, 100)), 2);
            MakeMonster("B1", new MONSTER4_A(new Vector2(100, 100)), 3);
            MakeMonster("B1", new MONSTER4_B(new Vector2(100, 200)), 3);
            MakeMonster("B1", new MONSTER41_C(new Vector2(100, 300)), 5 + GamePage.HERO_S);
        }


        public void R6()
        {
            Time = 500;//下一波攻擊時間

            MakeMonster("A1", new MONSTER41_B(new Vector2(0, 0)), 3);
            MakeMonster("B1", new MONSTER6_C(new Vector2(0, -200)), 3);
        }


        public void R7()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6_C(new Vector2(320, -400)), 3);


            for (int i = 0; i < 10; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(430, -60 * i));
                MMM.Yn = 250;

                MMM.N2 = 150;
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }

            for (int i = 0; i < 10; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(50, -60 * i));
                MMM.Yn = 250;

                MMM.N2 = 150;
                MMM.ADD_X2 = 1f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }


        }


        public void R8()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("C1", new MONSTER6_B(new Vector2(0, 0)), 5);
            MakeMonster("C1", new MONSTER2_B(new Vector2(0, 0)), 5 + GamePage.HERO_S);
            MakeMonster("C1", new MONSTER21_B(new Vector2(0, 0)), 5 + GamePage.HERO_S);
        }

        public void R9()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER6_B(new Vector2(0, 0)), 5);
        }
    }
}
