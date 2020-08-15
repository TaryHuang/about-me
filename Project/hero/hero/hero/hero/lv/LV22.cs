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
    public class LV22 : LV0
    {

        public LV22()
        {
            GROUP = 6;
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
            }
            return BOX;
        }



        public void R1()
        {

            Time = 30;//下一波攻擊時間

            for (int i = 0; i < 25; i++)
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

            for (int i = 0; i < 20; i++)
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
            for (int i = 0; i < 25; i++)
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




            for (int i = 0; i < 25; i++)
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


        public void R3()
        {
            Time = 10;//下一波攻擊時間
            MakeMonster("A1", new BOSS5(new Vector2(200, -800)), 1);

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


        public void R4()
        {
            Time = 10;//下一波攻擊時間
        }

        public void R5()
        {
            Time = 10;//下一波攻擊時間
        }



        public void R6()
        {
            Time = 100;//下一波攻擊時間

            MakeMonster("C1", new BOSS5_G(new Vector2(0, 0)), 2 + GamePage.HERO_S);
            MakeMonster("A1", new BOSS51(new Vector2(200, 1500)), 1);
            //中間
            for (int i = 0; i < 30; i++)
            {
                MONSTER11_A MMM = new MONSTER11_A(new Vector2(240, -40 * i));
                MMM.Yn = 100;

                MMM.N2 = GamePage.randObj.Next(50, 200);
                MMM.ADD_X2 = (float)(GamePage.randObj.Next(-150, 150) * 0.01);
                MMM.ADD_Y2 = 2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }



            //右邊
            for (int i = 0; i < 30; i++)
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
            for (int i = 0; i < 30; i++)
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


    }
}
