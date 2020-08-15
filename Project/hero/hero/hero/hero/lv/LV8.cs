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
    public class LV8 : LV0
    {

        public LV8()
        {
            GROUP = 8;
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
            }
            return BOX;
        }



        public void R1()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("A3", new MONSTER1_B(new Vector2(30, 0)), 4);
            MakeMonster("A4", new MONSTER1_B(new Vector2(450, 0)), 4);
        }


        public void R2()
        {
            Time = 300;//下一波攻擊時間
            //中間
            for (int i = 0; i < 12; i++)
            {
                MONSTER11 MMM = new MONSTER11_C(new Vector2(240, -40 * i));
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


        public void R3()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("B1", new MONSTER4_B(new Vector2(50, 50)), 6);

        }



        public void R4()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("B1", new MONSTER7_C(new Vector2(320, 0)), 3);
            MakeMonster("B1", new MONSTER3_C(new Vector2(0, 150)), 3);
        }


        public void R5()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER3_C(new Vector2(350, 0)), 3);




            for (int i = 0; i < 3; i++)
            {
                MONSTER11 MMM = new MONSTER11_C(new Vector2(40 * i + 480 - 50, 500));
                MMM.Yn = 500;



                MMM.N2 = GamePage.randObj.Next(50, 120);
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = -1f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }


            for (int i = 0; i < 3; i++)
            {
                MONSTER11 MMM = new MONSTER11_C(new Vector2(-40 * i + 50, 500));
                MMM.Yn = 500;



                MMM.N2 = GamePage.randObj.Next(50, 120);
                MMM.ADD_X2 = 1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = 1f;
                MMM.ADD_Y3 = 2f;



                BOX.Add(MMM);
            }


        }


        public void R6()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_B(new Vector2(0, 0)), 3);
            MakeMonster("C1", new MONSTER41_B(new Vector2(0, 0)), 3);
        }



        public void R7()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_B(new Vector2(0, 0)), 2 + GamePage.HERO_S);
            MakeMonster("A3", new MONSTER41_A(new Vector2(100, 100)), 2);
            MakeMonster("B1", new MONSTER6_C(new Vector2(100, -250)), 2);
        }


        public void R8()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A1", new MONSTER2_B(new Vector2(220, 0)), 3 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER21_B(new Vector2(300, 0)), 3 + GamePage.HERO_S);
            MakeMonster("B1", new MONSTER6_C(new Vector2(400, -200)), 2);
        }
    }
}
