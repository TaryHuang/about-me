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
    public class LV4 : LV0
    {

        public LV4()
        {
            GROUP = 10;
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
                case 10: R10(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER1_C(new Vector2(-15, 20)), 11);
            MakeMonster("B1", new MONSTER7(new Vector2(200, 200)), 3);

        }











        public void R2()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("B1", new MONSTER3(new Vector2(50, 150)), 3);
            MakeMonster("A2", new MONSTER4(new Vector2(200, 100)), 4);
            MakeMonster("B1", new MONSTER3(new Vector2(400, 0)), 3);
        }


        public void R3()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("B1", new MONSTER3(new Vector2(300, 0)), 3);
            MakeMonster("A1", new MONSTER41(new Vector2(240, 60)), 5);
        }



        public void R4()
        {
            Time = 300;//下一波攻擊時間
            for (int i = 0; i < 12; i++)
            {
                MONSTER11 MMM = new MONSTER11(new Vector2(100, -60 * i));
                MMM.N2 = 120;
                MMM.ADD_X2 = 2.5f;
                MMM.ADD_Y2 = 0;

                MMM.N3 = 85;
                MMM.ADD_X3 = 0;
                MMM.ADD_Y3 = -2.5f;

                MMM.N4 = 85;
                MMM.ADD_X4 = -2.5f;
                MMM.ADD_Y4 = 0;


                MMM.N5 = 500;
                MMM.ADD_X5 = 0;
                MMM.ADD_Y5 = 2.5f;

                BOX.Add(MMM);
            }

        }


        public void R5()
        {
            Time = 400;//下一波攻擊時間
            MakeMonster("A2", new MONSTER41(new Vector2(0, 0)), 3);
            MakeMonster("A1", new MONSTER7(new Vector2(50, 60)), 2);
            MakeMonster("A1", new MONSTER7(new Vector2(320, 120)), 2);
        }


        public void R6()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("C1", new MONSTER31(new Vector2(350, 0)), 5);
        }



        public void R7()
        {
            Time = 500;//下一波攻擊時間


            for (int i = 0; i < 12; i++)
            {
                MONSTER11 MMM = new MONSTER11(new Vector2(380, -60 * i));
                MMM.N2 = 120;
                MMM.ADD_X2 = -2.5f;
                MMM.ADD_Y2 = 0;

                MMM.N3 = 85;
                MMM.ADD_X3 = 0;
                MMM.ADD_Y3 = -2.5f;

                MMM.N4 = 85;
                MMM.ADD_X4 = 2.5f;
                MMM.ADD_Y4 = 0;


                MMM.N5 = 500;
                MMM.ADD_X5 = 0;
                MMM.ADD_Y5 = 2.5f;

                BOX.Add(MMM);
            }
        }


        public void R8()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("A1", new MONSTER4_C(new Vector2(100, 0)), 3 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER4_C(new Vector2(100, 100)), 3 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER41_B(new Vector2(100, 200)), 2);
            MakeMonster("B1", new MONSTER7_C(new Vector2(200, 50)), 3);
        }

        public void R9()
        {
            Time = 150;//下一波攻擊時間
            MakeMonster("B1", new MONSTER3_C(new Vector2(100, 0)), 3);
            MakeMonster("C1", new MONSTER2_C(new Vector2(0, 0)), 5);
            MakeMonster("C1", new MONSTER21_C(new Vector2(0, 0)), 5);
        }


        public void R10()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER3_C(new Vector2(0, 0)), 3);

        }
    }
}
