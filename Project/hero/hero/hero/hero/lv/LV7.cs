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
    public class LV7 : LV0
    {

        public LV7()
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
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER41_C(new Vector2(0, 0)), 2);
            MakeMonster("C1", new MONSTER4_C(new Vector2(0, 200)), 3);
            MakeMonster("A4", new MONSTER1_C(new Vector2(480, 300)), 10);
        }



        public void R2()
        {
            Time = 800;//下一波攻擊時間
            MakeMonster("A1", new MONSTER5_C(new Vector2(440, 0)), 4);
            MakeMonster("A1", new MONSTER5_C(new Vector2(20, 0)), 4);
            MakeMonster("A2", new MONSTER5_C(new Vector2(180, 0)), 5);
            MakeMonster("A3", new MONSTER1_C(new Vector2(200, 200)), 3);


            MakeMonster("B1", new MONSTER3_C(new Vector2(0, 100)), 3);
            MakeMonster("B1", new MONSTER3_C(new Vector2(300, 500)), 3);
        }


        public void R3()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_C(new Vector2(50, 330)), 4 + GamePage.HERO_S);
            MakeMonster("C1", new MONSTER41_C(new Vector2(50, 200)), 4 + GamePage.HERO_S);
            MakeMonster("A3", new MONSTER1_B(new Vector2(0, 0)), 10);
            MakeMonster("B1", new MONSTER3_C(new Vector2(300, 0)), 3);
        }

        public void R4()
        {
            Time = 800;//下一波攻擊時間
            MakeMonster("C1", new MONSTER4_B(new Vector2(50, 330)), 3);
            MakeMonster("C1", new MONSTER3_C(new Vector2(0, 100)), 2);
            MakeMonster("C1", new MONSTER3_C(new Vector2(0, 100)), 2);


            MakeMonster("A2", new MONSTER2_C(new Vector2(0, 500)), 10);
            MakeMonster("A2", new MONSTER2_C(new Vector2(0, 550)), 10);
            MakeMonster("C1", new MONSTER31_C(new Vector2(0, 1000)), 3);
            MakeMonster("C1", new MONSTER31_C(new Vector2(0, 1200)), 3);
        }



        public void R5()
        {
            Time = 800;//下一波攻擊時間
            MakeMonster("B1", new MONSTER7_C(new Vector2(240, 0)), 3);
            MakeMonster("A2", new MONSTER51_C(new Vector2(0, 0)), 5);
            MakeMonster("B1", new MONSTER4_B(new Vector2(250, 0)), 2);
            MakeMonster("B1", new MONSTER4(new Vector2(250,300)), 3);
            MakeMonster("C1", new MONSTER21_C(new Vector2(0, 0)), 5);
        }


        public void R6()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("C1", new MONSTER21_C(new Vector2(0, 0)), 5);
            MakeMonster("C1", new MONSTER31_C(new Vector2(0, 0)), 5);
        }




        public void R7()
        {
            Time = 500;//下一波攻擊時間

            MakeMonster("B1", new MONSTER7_C(new Vector2(50, 0)), 3);
            MakeMonster("B1", new MONSTER7_C(new Vector2(350, 0)), 3);


            for (int i = 0; i < 3; i++)
            {
                MONSTER11 MMM = new MONSTER11_C(new Vector2(40 * i + 480 - 50, 750));
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
                MONSTER11 MMM = new MONSTER11_C(new Vector2(-40 * i + 50, 750));
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


        public void R8()
        {
            Time = 200;//下一波攻擊時間

            MakeMonster("B1", new MONSTER7_C(new Vector2(50, 0)), 3 + GamePage.HERO_S);
            MakeMonster("B1", new MONSTER7_C(new Vector2(350, 0)), 3 + GamePage.HERO_S);


            MakeMonster("B1", new MONSTER41_B(new Vector2(100, 300)), 3 + GamePage.HERO_S);

            MakeMonster("C1", new MONSTER31_C(new Vector2(0, 0)), 5);



            //中間攻擊法
            for (int i = 0; i < 3 + GamePage.HERO_S; i++)
            {
                MONSTER11_C MMM = new MONSTER11_C(new Vector2(40 * i + 480 - 50, 500));
                MMM.Yn = 500;


                MMM.N2 = GamePage.randObj.Next(50, 120);
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = -2f;


                MMM.N3 = 500;
                MMM.ADD_X3 = -1f;
                MMM.ADD_Y3 = 1f;



                BOX.Add(MMM);
            }
        }
    }
}
