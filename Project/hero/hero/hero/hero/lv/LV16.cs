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
    public class LV16 : LV0
    {

        public LV16()
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
            Time = 300;//下一波攻擊時間

            for (int i = 0; i < 10; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(430, -60 * i));
                MMM.Yn = 250;

                MMM.N2 = 120;
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }


            for (int i = 0; i < 10; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(50, -60 * i));
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
            Time = 100;//下一波攻擊時間


            for (int i = 0; i < 3; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(40 * i + 480 - 50, 750));
                MMM.Yn = 0;



                MMM.N2 = 250;
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = -1f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }

        }


        public void R3()
        {
            Time = 100;//下一波攻擊時間


            for (int i = 0; i < 3; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(-40 * i + 50, 750));
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

        public void R4()
        {

            Time = 500;//下一波攻擊時間
            MakeMonster("B1", new MONSTER41_A(new Vector2(-15, 20)), 9 + GamePage.HERO_S);
            MakeMonster("B1", new MONSTER7_A(new Vector2(200, 200)), 3 + GamePage.HERO_S);

        }




        public void R5()
        {

            Time = 100;//下一波攻擊時間
            for (int i = 0; i < 3; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(40 * i + 480 - 50, 500));
                MMM.Yn = 500;



                MMM.N2 = GamePage.randObj.Next(50, 120);
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = -1f;
                MMM.ADD_Y3 = 1f;



                BOX.Add(MMM);
            }


            for (int i = 0; i < 3; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(-40 * i + 50, 500));
                MMM.Yn = 500;



                MMM.N2 = GamePage.randObj.Next(50, 120);
                MMM.ADD_X2 = 1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 1f;
                MMM.ADD_Y3 = 1f;



                BOX.Add(MMM);
            }

        }



        public void R6()
        {

            Time = 300;//下一波攻擊時間

            MakeMonster("B1", new MONSTER7_A(new Vector2(200, 0)), 3 + GamePage.HERO_S);
            MakeMonster("A2", new MONSTER5_A(new Vector2(200, 200)), 3 + GamePage.HERO_S);
            MakeMonster("A2", new MONSTER51_A(new Vector2(200, 400)), 3 + GamePage.HERO_S);

        }



        public void R7()
        {
            MakeMonster("A2", new MONSTER51_B(new Vector2(200, 100)), 3);
            MakeMonster("A2", new MONSTER5_B(new Vector2(200, 200)), 3);

            Time = 350;//下一波攻擊時間
            for (int i = 0; i < 12; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(20, -60 * i));
                MMM.Yn = 650;

                MMM.N2 = 150;
                MMM.ADD_X2 = 2f;
                MMM.ADD_Y2 = 0f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }




            for (int i = 0; i < 12; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(440, -60 * i));
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



        public void R8()
        {
            Time = 400;//下一波攻擊時間


            //中間
            for (int i = 0; i < 30; i++)
            {
                MONSTER11_B MMM = new MONSTER11_B(new Vector2(240, -40 * i));
                MMM.Yn = 100;

                MMM.N2 = GamePage.randObj.Next(50, 200);
                MMM.ADD_X2 = (float)(GamePage.randObj.Next(-150, 150) * 0.01);
                MMM.ADD_Y2 = 2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }

        }


        public void R9()
        {
            Time = 120;//下一波攻擊時間
            AAA.firedM2();
            MakeMonster("B1", new MONSTER6_A(new Vector2(200, -200)), 2 + GamePage.HERO_S);
            MakeMonster("B1", new MONSTER6_A(new Vector2(200, -400)), 2 + GamePage.HERO_S);
        }


        public void R10()
        {
            Time = 120;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6_A(new Vector2(300, -100)), 2);
            MakeMonster("B1", new MONSTER6_A(new Vector2(400, -300)), 2);
        }



        public void R11()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER6_A(new Vector2(200, -150)), 2 + GamePage.HERO_S);
        }
    }
}
