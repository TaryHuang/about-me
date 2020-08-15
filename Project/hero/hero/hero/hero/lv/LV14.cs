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
    public class LV14 : LV0
    {

        public LV14()
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
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_C(new Vector2(0, 0)), 35);

        }

        public void R2()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_C(new Vector2(0, 0)), 25);
        }

        public void R3()
        {
            Time = 800;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_C(new Vector2(0, 0)), 25);
            MakeMonster("C1", new MONSTER4_B(new Vector2(0, 0)), 7 + GamePage.HERO_S);
        }






        public void R4()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 30);
        }



        public void R5()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 30);
            MakeMonster("C1", new MONSTER1_B(new Vector2(0, 0)), 10 + GamePage.HERO_S);
        }




        public void R6()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 25);
        }

        public void R7()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 25);
            MakeMonster("C1", new MONSTER2_B(new Vector2(0, 0)), 7 + GamePage.HERO_S);
            MakeMonster("C1", new MONSTER21_B(new Vector2(0, 0)), 7 + GamePage.HERO_S);
        }



        public void R8()
        {
            Time = 350;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 30);
            MakeMonster("C1", new MONSTER4_B(new Vector2(0, 0)), 5);

        }

 
        public void R9()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("C1", new MONSTER7_B(new Vector2(0, 0)), 30);
            MakeMonster("C1", new MONSTER2_B(new Vector2(0, 0)), 7);
            MakeMonster("C1", new MONSTER21_B(new Vector2(0, 0)), 7);
            MakeMonster("A2", new MONSTER41_A(new Vector2(0, 300)), 2 + GamePage.HERO_S);
        }
    }
}
