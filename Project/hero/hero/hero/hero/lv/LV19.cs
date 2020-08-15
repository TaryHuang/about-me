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
    public class LV19 : LV0
    {

        public LV19()
        {
            GROUP = 16;
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
                case 12: R12(); break;
                case 13: R13(); break;
                case 14: R14(); break;
                case 15: R15(); break;
                case 16: R16(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_A(new Vector2(0, 0)), 3 + GamePage.HERO_S);
            MakeMonster("C1", new MONSTER3_A(new Vector2(0, 200)), 3 + GamePage.HERO_S);
        }











        public void R2()
        {
            Time = 800;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_A(new Vector2(0, 0)), 5);
            MakeMonster("C1", new MONSTER3_A(new Vector2(0, 0)), 3);
            MakeMonster("A1", new MONSTER51_A(new Vector2(220, 200)), 5 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER41_A(new Vector2(220, 100)), 2 + GamePage.HERO_S);
        }


        public void R3()
        {
            Time = 500;//下一波攻擊時間

            MakeMonster("A1", new MONSTER51_A(new Vector2(50, 0)), 2);
            MakeMonster("A1", new MONSTER3_A(new Vector2(400, 100)), 2);
            MakeMonster("A1", new MONSTER3_A(new Vector2(50, 200)), 2);
            MakeMonster("A1", new MONSTER41_A(new Vector2(220, 0)), 3);
        }

        public void R4()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_A(new Vector2(0, 0)), 3 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER41_A(new Vector2(0, 0)), 2);
            MakeMonster("A2", new MONSTER1_A(new Vector2(100, 0)), 5);

        }



        public void R5()
        {
            Time = 500;//下一波攻擊時間

            MakeMonster("B1", new MONSTER3_A(new Vector2(300, 100)), 3);
            MakeMonster("A2", new MONSTER7_A(new Vector2(150, 200)), 5);
            MakeMonster("B1", new MONSTER3_A(new Vector2(200, 300)), 3);
            MakeMonster("B1", new MONSTER3_A(new Vector2(100, 600)), 3);

        }



        public void R6()
        {
            Time = 200;//下一波攻擊時間
            AAA.firedM2();

            MakeMonster("A1", new MONSTER41_A(new Vector2(320, 700)), 2);



            for (int i = 0; i < 12; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(380, -60 * i));
                MMM.Yn = 400;

                MMM.N2 = 150;
                MMM.ADD_X2 = -1.5f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }




            for (int i = 0; i < 12; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(100, -60 * i));
                MMM.Yn = 400;

                MMM.N2 = 150;
                MMM.ADD_X2 = 1.5f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }

        }



        public void R7()
        {
            Time = 30;//下一波攻擊時間
            MakeMonster("A1", new BOSS5_G(new Vector2(240, 150)), 2);
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 10);



            //右邊
            for (int i = 0; i < 15; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(450, -40 * i));
                MMM.Yn = GamePage.randObj.Next(0, 150);

                MMM.N2 = GamePage.randObj.Next(80, 320);
                MMM.ADD_X2 = (float)(GamePage.randObj.Next(-150, 0) * 0.01);
                MMM.ADD_Y2 = 2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }



            //左邊
            for (int i = 0; i < 15; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(50, -40 * i));
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

        public void R8()
        {
            Time = 10;//下一波攻擊時間
        }

        public void R9()
        {
            Time = 10;//下一波攻擊時間
        }

        public void R10()
        {
            Time = 10;//下一波攻擊時間
            AAA.firedM2();
        }



        public void R11()
        {
            Time = 120;//下一波攻擊時間


            for (int i = 0; i < 3; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(40 * i + 480 - 50, 750));
                MMM.Yn = 0;



                MMM.N2 = 250;
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = -1f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }


            for (int i = 0; i < 3; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(-40 * i + 50, 750));
                MMM.Yn = 0;



                MMM.N2 = 250;
                MMM.ADD_X2 = 1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 1f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }

        }



        public void R12()
        {
            Time = 700;//下一波攻擊時間


            for (int i = 0; i < 25 + GamePage.HERO_S; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(20, -60 * i));
                MMM.Yn = 650;

                MMM.N2 = 150;
                MMM.ADD_X2 = 2f;
                MMM.ADD_Y2 = 0f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }




            for (int i = 0; i < 25 + GamePage.HERO_S; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(440, -60 * i));
                MMM.Yn = 650;


                MMM.N2 = 150;
                MMM.ADD_X2 = -2f;
                MMM.ADD_Y2 = 0f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;


                BOX.Add(MMM);
            }

        }


        public void R13()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER4_A(new Vector2(200, 0)), 3);
            MakeMonster("B1", new MONSTER3_A(new Vector2(400, 200)), 3);
            MakeMonster("B1", new MONSTER6_A(new Vector2(100, -400)), 3);
        }


        public void R14()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6_A(new Vector2(180, -400)), 5);
            MakeMonster("C1", new MONSTER7_A(new Vector2(0, 0)), 5 + GamePage.HERO_S);
            MakeMonster("B1", new MONSTER1_A(new Vector2(0, 0)), 10);
        }

        public void R15()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6_A(new Vector2(180, -400)), 5);
        }


        public void R16()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6_A(new Vector2(180, -400)), 5);
            MakeMonster("B1", new MONSTER1_A(new Vector2(0, 0)), 10);
            MakeMonster("B1", new MONSTER3_A(new Vector2(0, 300)), 5);
        }
    }
}
