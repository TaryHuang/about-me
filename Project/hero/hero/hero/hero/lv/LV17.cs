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
    public class LV17 : LV0
    {

        public LV17()
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
            Time = 100;//下一波攻擊時間
            for (int i = 0; i < 20; i++)
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
            Time = 300;//下一波攻擊時間
            MakeMonster("A3", new MONSTER5_B(new Vector2(20, 0)), 5);
            MakeMonster("A4", new MONSTER5_B(new Vector2(450, 0)), 5);
        }


        public void R3()
        {
            Time = 250;//下一波攻擊時間

            MakeMonster("A2", new MONSTER4_A(new Vector2(150, 0)), 2 + GamePage.HERO_S);
            MakeMonster("A2", new MONSTER41_A(new Vector2(150, 100)), 2 + GamePage.HERO_S);
            MakeMonster("A2", new MONSTER41_A(new Vector2(150, 200)), 2 + GamePage.HERO_S);
            MakeMonster("A2", new MONSTER4_A(new Vector2(150, 300)), 2 + GamePage.HERO_S);
        }

        public void R4()
        {
            Time = 10;//下一波攻擊時間
            MakeMonster("A2", new BOSS5(new Vector2(240, 300)), 1);
        }



        public void R5()
        {
            Time = 10;//下一波攻擊時間
        }


        public void R6()
        {
            Time = 10;//下一波攻擊時間
        }


        public void R7()
        {
            Time = 10;//下一波攻擊時間
        }





        public void R8()
        {
            Time = 400;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_A(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_C(new Vector2(0, 0)), 15);
        }



        public void R9()
        {
            Time = 350;//下一波攻擊時間
            AAA.firedM2();
            MakeMonster("C1", new MONSTER7_A(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_C(new Vector2(0, 0)), 15);

            MakeMonster("A1", new MONSTER2_A(new Vector2(50, 0)), 5 + GamePage.HERO_S);
            MakeMonster("A1", new MONSTER21_A(new Vector2(440, 0)), 5 + GamePage.HERO_S);
        }




        public void R10()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_A(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_C(new Vector2(0, 0)), 15);


            MakeMonster("C1", new MONSTER3_B(new Vector2(0, 0)), 3);
            MakeMonster("C1", new MONSTER3_B(new Vector2(0, 200)), 3);
            MakeMonster("C1", new MONSTER3_B(new Vector2(0, 400)), 3);
            MakeMonster("C1", new MONSTER41_B(new Vector2(0, 100)), 5 + GamePage.HERO_S);
            MakeMonster("C1", new MONSTER4_B(new Vector2(0, 100)), 5 + GamePage.HERO_S);
        }


        public void R11()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_A(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 15);
            MakeMonster("C1", new MONSTER7_C(new Vector2(0, 0)), 15);

        }
    }
}
