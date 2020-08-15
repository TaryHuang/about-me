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
    public class LV5 : LV0
    {

        public LV5()
        {
            GROUP = 11;
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
                case 11: R11(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 400;//下一波攻擊時間
            MakeMonster("A1", new MONSTER5(new Vector2(50, 0)), 5);
            MakeMonster("B1", new MONSTER4_C(new Vector2(200, 100)), 3);
        }



        public void R2()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER3(new Vector2(0, 0)), 3);
            MakeMonster("A1", new MONSTER51_C(new Vector2(300, 200)), 2);
            MakeMonster("B1", new MONSTER7(new Vector2(350, 0)), 3);
        }


        public void R3()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("B1", new MONSTER31(new Vector2(200, 400)), 5);
            MakeMonster("B1", new MONSTER3_C(new Vector2(0, 0)), 3);
            MakeMonster("A1", new MONSTER5_C(new Vector2(50, 0)), 8);
        }

        public void R4()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_C(new Vector2(0, 100)), 5);
            MakeMonster("B1", new MONSTER5(new Vector2(220, 0)), 20);
            MakeMonster("B1", new MONSTER6(new Vector2(200, -200)), 3);

        }




        public void R5()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4(new Vector2(0, 100)), 10);
            MakeMonster("B1", new MONSTER5_C(new Vector2(220, 0)), 3);
            MakeMonster("B1", new MONSTER6(new Vector2(350, -300)), 3);
        }


        public void R6()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A1", new MONSTER41_B(new Vector2(200, 300)), 2);
            MakeMonster("B1", new MONSTER6(new Vector2(0, -350)), 3);
            MakeMonster("B1", new MONSTER41_C(new Vector2(200, 100)), 3);
            MakeMonster("B1", new MONSTER6(new Vector2(200, -200)), 3);
        }


        public void R7()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("A1", new MONSTER41(new Vector2(200, 300)), 3 + GamePage.HERO_S);
            MakeMonster("B1", new MONSTER6(new Vector2(240, -50)), 3);

            MakeMonster("B1", new MONSTER7_C(new Vector2(50, 50)), 3);
            MakeMonster("B1", new MONSTER7_C(new Vector2(350, 50)), 3);
        }

        public void R8()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6(new Vector2(300, -200)), 3);
            MakeMonster("C1", new MONSTER5_C(new Vector2(0, 0)), 3);
        }


        public void R9()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6(new Vector2(400, -200)), 3);


            MakeMonster("B1", new MONSTER7(new Vector2(50, 200)), 3 + GamePage.HERO_S);

            for (int i = 0; i < 5; i++)
            {
                MONSTER11 MMM = new MONSTER11_C(new Vector2(450, -40 * i));
                MMM.Yn = GamePage.randObj.Next(0, 150);

                MMM.N2 = GamePage.randObj.Next(80, 320);
                MMM.ADD_X2 = (float)(GamePage.randObj.Next(-150, 0) * 0.01);
                MMM.ADD_Y2 = 2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }



        }


        public void R10()
        {
            MakeMonster("B1", new MONSTER6(new Vector2(0, -350)), 3);

            MakeMonster("B1", new MONSTER7_C(new Vector2(250, 0)), 3);

            Time = 300;//下一波攻擊時間
            for (int i = 0; i < 5; i++)
            {
                MONSTER11 MMM = new MONSTER11_C(new Vector2(50, -40 * i));
                MMM.Yn = GamePage.randObj.Next(0, 150);

                MMM.N2 = GamePage.randObj.Next(80, 320);
                MMM.ADD_X2 = (float)(GamePage.randObj.Next(0, 150) * 0.01);
                MMM.ADD_Y2 = 2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }

        }




        public void R11()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6_C(new Vector2(100, -400)), 5);
            MakeMonster("C1", new MONSTER3_B(new Vector2(0, 0)), 3);
        }
    }
}
