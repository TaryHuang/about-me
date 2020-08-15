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
    public class LV6 : LV0
    {

        public LV6()
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
            MakeMonster("C1", new MONSTER4_C(new Vector2(0, 0)), 5);
        }











        public void R2()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("C1", new MONSTER41(new Vector2(0, 0)), 5);
            MakeMonster("C1", new MONSTER5(new Vector2(0, 0)), 3);
        }


        public void R3()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A1", new MONSTER2_C(new Vector2(50, 0)), 3);
            MakeMonster("A1", new MONSTER2_C(new Vector2(250, 0)), 3);
        }

        public void R4()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("A1", new MONSTER5(new Vector2(0, 100)), 5);


            for (int i = 0; i < 12; i++)
            {
                MONSTER11_C MMM = new MONSTER11_C(new Vector2(240, -40 * i));
                MMM.Yn = 100;

                if (i % 2 == 0)
                {



                    MMM.N2 = 150;
                    MMM.ADD_X2 = -1f;
                    MMM.ADD_Y2 = 2f;


                    MMM.N3 = 500;
                    MMM.ADD_X3 = 1f;
                    MMM.ADD_Y3 = 2f;

                }
                else
                {

                    MMM.N2 = 150;
                    MMM.ADD_X2 = 1f;
                    MMM.ADD_Y2 = 2f;


                    MMM.N3 = 500;
                    MMM.ADD_X3 = -1f;
                    MMM.ADD_Y3 = 2f;

                }

                BOX.Add(MMM);
            }




        }


        public void R5()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("C1", new MONSTER1_C(new Vector2(0, 0)), 5);
        }

        public void R6()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A2", new MONSTER3_C(new Vector2(0, 0)), 3);
            MakeMonster("A2", new MONSTER3_C(new Vector2(200, 200)), 3);
        }

        public void R7()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new MONSTER2_C(new Vector2(0, 0)), 5);
            MakeMonster("B1", new MONSTER21_C(new Vector2(0, 200)), 5);
            MakeMonster("B1", new MONSTER1_C(new Vector2(0, 400)), 5);
        }

        public void R8()
        {
            Time = 150;//下一波攻擊時間
            MakeMonster("B1", new MONSTER5_C(new Vector2(0, 0)), 5 + GamePage.HERO_S);
        }



        public void R9()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("B1", new BOSS5(new Vector2(240, 100)), 1);
        }
    }
}
