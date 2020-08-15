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
    public class LV2 : LV0
    {

        public LV2()
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
            MakeMonster("A1", new MONSTER5(new Vector2(50, 0)), 7);
            MakeMonster("B1", new MONSTER4(new Vector2(200, 0)), 3);
        }











        public void R2()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A1", new MONSTER5(new Vector2(450, 200)), 5);
            
            MakeMonster("A1", new MONSTER21(new Vector2(240, 0)), 5);
        }


        public void R3()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("A1", new MONSTER41(new Vector2(100, 100)), 3 + GamePage.HERO_S);

            MakeMonster("A2", new MONSTER51(new Vector2(50, 250)), 3);
            MakeMonster("A2", new MONSTER5(new Vector2(400, 250)), 3);

            MakeMonster("A3", new MONSTER7(new Vector2(100, 0)), 3 + GamePage.HERO_S);

            for (int i = 0; i < 10; i++)
            {
                MONSTER11 MMM = new MONSTER11(new Vector2(430, -60 * i));
                MMM.Yn = 250;

                MMM.N2 = 200;
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }

            for (int i = 0; i < 10; i++)
            {
                MONSTER11 MMM = new MONSTER11(new Vector2(50, -60 * i));
                MMM.Yn = 250;

                MMM.N2 = 200;
                MMM.ADD_X2 = 1f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }
        }

        public void R4()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("A3", new MONSTER3(new Vector2(0, 150)), 5);
            MakeMonster("A4", new MONSTER41(new Vector2(300, 0)), 5);



        }


        public void R5()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("C1", new MONSTER2(new Vector2(0, 0)), 5);
            MakeMonster("C1", new MONSTER21(new Vector2(0, 0)), 5);


            MakeMonster("C1", new MONSTER7(new Vector2(0, 0)), 4 + GamePage.HERO_S);
        }


        public void R6()
        {
            Time = 500;//下一波攻擊時間
            MakeMonster("C1", new MONSTER41(new Vector2(0, 0)), 7);
            MakeMonster("C1", new MONSTER1(new Vector2(0, 0)), 5);
        }



        public void R7()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("B1", new MONSTER31(new Vector2(0, 0)),8);


            for (int i = 0; i < 20; i++)
            {
                MONSTER11 MMM = new MONSTER11(new Vector2(240, -60 * i));
                MMM.Yn = 100;

                MMM.N2 = 150;
                MMM.ADD_X2 = 1.5f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = -1.5f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }

            MakeMonster("A2", new MONSTER7(new Vector2(180, 200)), 5);
        }



        public void R8()
        {

            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER3_C(new Vector2(0, 0)), 3);
        }



    }
}
