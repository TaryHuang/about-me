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
    public class LV18 : LV0
    {

        public LV18()
        {
            GROUP = 1;
        }

        public override List<MONSTER_IF> getMonster(int group)
        {
            BOX.Clear();
            switch (group)
            {
                case 1: R1(); break;
            }
            return BOX;
        }



        public void R1()
        {
            Time = 200;//下一波攻擊時間
            MakeMonster("A1", new BOSS6(new Vector2(50, 0)), 1);


            /*
            for (int i = 0; i < 12 + GamePage.HERO_S; i++)
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




            for (int i = 0; i < 12 + GamePage.HERO_S; i++)
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
             */
        }




    }
}
