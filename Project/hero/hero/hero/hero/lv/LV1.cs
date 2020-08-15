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
    public class LV1 : LV0
    {

        public LV1()
        {
            GROUP = 8;
        }

        public override List<MONSTER_IF> getMonster(int group)
        {
            BOX.Clear();
            switch(group){
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
            Time = 500;//下一波攻擊時間
            MakeMonster("A1", new MONSTER1(new Vector2(100, 0)), 5);
            MakeMonster("A1", new MONSTER1(new Vector2(250, 400)), 8);


        }


        public void R2()
        {
            Time = 200;//下一波攻擊時間

            MakeMonster("A2", new MONSTER4(new Vector2(250, 0)), 5+GamePage.HERO_S);
        }


        public void R3()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("C1", new MONSTER3(new Vector2(0, 0)), 3);




            for (int i = 0; i < 10; i++)
            {
                MONSTER11 MMM = new MONSTER11(new Vector2(430, -60 * i));
                MMM.Yn = 250;

                MMM.N2 = 120;
                MMM.ADD_X2 = -1f;
                MMM.ADD_Y2 = 2f;

                MMM.N3 = 500;
                MMM.ADD_X3 = 0f;
                MMM.ADD_Y3 = 2f;

                BOX.Add(MMM);
            }


            MakeMonster("B1", new MONSTER3(new Vector2(0, 100)), 3);
            MakeMonster("B1", new MONSTER7(new Vector2(200, 100)), 3);
        }



        public void R4()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("B1", new MONSTER4(new Vector2(100, 0)), 2);
        }


        public void R5()
        {
            Time = 300;//下一波攻擊時間

            MakeMonster("B1", new MONSTER2(new Vector2(100, 0)), 5);
            MakeMonster("B1", new MONSTER21(new Vector2(200, 250)), 5);
        }


        public void R6()
        {
            Time = 100;//下一波攻擊時間
            MakeMonster("C1", new MONSTER3(new Vector2(0, 0)), 3);
            MakeMonster("B1", new MONSTER2(new Vector2(100, 0)), 3);
        }



        public void R7()
        {
            Time = 300;//下一波攻擊時間
            MakeMonster("A3", new MONSTER1(new Vector2(100, 100)), 3);
            MakeMonster("A3", new MONSTER1(new Vector2(100, 200)), 3);
            MakeMonster("C1", new MONSTER7(new Vector2(0, 0)), 3);
        }


        public void R8()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A3", new MONSTER4(new Vector2(400, 200)), 5);
            MakeMonster("B2", new MONSTER1(new Vector2(200, 0)), 7);
            MakeMonster("C1", new MONSTER3(new Vector2(0, 0)), 5);


            MakeMonster("B1", new MONSTER7(new Vector2(240, 300)), 3);
        }


    }
}
