using System;
using System.IO;
using System.Collections.Generic;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Navigation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;
using System.Xml.Serialization;


namespace hero
{
    public class LV0 : LV_IF
    {
        public List<MONSTER_IF> BOX =new List<MONSTER_IF>();

        public int GROUP = 0,Time = 0;

        public MONSTER AAA = new MONSTER(new Vector2(240, 0));


        public void R3(int n)
        {
            for (int i = 0; i < n;i++ )
            {
                AAA.firedR3();
            }
        }

        public void R2(int n)
        {
            for (int i = 0; i < n; i++)
            {
                AAA.firedR2();
            }
        }



        public LV0()
        {
            GROUP = 0;
        }



        public virtual List<MONSTER_IF> getMonster(int group)
        {
            BOX.Clear();//清除容器的怪獸
            /*
            switch(group){
                case 1: R1(); break;
                case 2: R2(); break;
                     .
                     .
                     .
            }
            */
            return BOX;
        }






        public void MakeMonster(string Ctype, MONSTER M, int Total)
        {
            MONSTER[] mbox = new MONSTER[Total];
            TARY_GPLOC GP = new TARY_GPLOC(Ctype, new Vector2(M.Width, M.Height), new Vector2(M.X, M.Y), Total,false);


            
            for (int i = 0; i < GP.COUNT();i++ )
            {
                switch(M.GetType().ToString())
                {
                    case "hero.MONSTER1": mbox[i] = new MONSTER1(new Vector2(0, 0)); break;
                    case "hero.MONSTER1_A": mbox[i] = new MONSTER1_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER1_B": mbox[i] = new MONSTER1_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER1_C": mbox[i] = new MONSTER1_C(new Vector2(0, 0)); break;


                    case "hero.MONSTER11": mbox[i] = new MONSTER11(new Vector2(0, 0)); break;
                    case "hero.MONSTER11_A": mbox[i] = new MONSTER11_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER11_B": mbox[i] = new MONSTER11_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER11_C": mbox[i] = new MONSTER11_C(new Vector2(0, 0)); break;


                    case "hero.MONSTER2": mbox[i] = new MONSTER2(new Vector2(0, 0)); break;
                    case "hero.MONSTER2_A": mbox[i] = new MONSTER2_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER2_B": mbox[i] = new MONSTER2_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER2_C": mbox[i] = new MONSTER2_C(new Vector2(0, 0)); break;

                    case "hero.MONSTER21": mbox[i] = new MONSTER21(new Vector2(0, 0)); break;
                    case "hero.MONSTER21_A": mbox[i] = new MONSTER21_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER21_B": mbox[i] = new MONSTER21_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER21_C": mbox[i] = new MONSTER21_C(new Vector2(0, 0)); break;



                    case "hero.MONSTER3": mbox[i] = new MONSTER3(new Vector2(0, 0)); break;
                    case "hero.MONSTER3_A": mbox[i] = new MONSTER3_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER3_B": mbox[i] = new MONSTER3_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER3_C": mbox[i] = new MONSTER3_C(new Vector2(0, 0)); break;


                    case "hero.MONSTER31": mbox[i] = new MONSTER31(new Vector2(0, 0)); break;
                    case "hero.MONSTER31_A": mbox[i] = new MONSTER31_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER31_B": mbox[i] = new MONSTER31_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER31_C": mbox[i] = new MONSTER31_C(new Vector2(0, 0)); break;


                    case "hero.MONSTER4": mbox[i] = new MONSTER4(new Vector2(0, 0)); break;
                    case "hero.MONSTER4_A": mbox[i] = new MONSTER4_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER4_B": mbox[i] = new MONSTER4_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER4_C": mbox[i] = new MONSTER4_C(new Vector2(0, 0)); break;


                    case "hero.MONSTER41": mbox[i] = new MONSTER41(new Vector2(0, 0)); break;
                    case "hero.MONSTER41_A": mbox[i] = new MONSTER41_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER41_B": mbox[i] = new MONSTER41_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER41_C": mbox[i] = new MONSTER41_C(new Vector2(0, 0)); break;

                    case "hero.MONSTER5": mbox[i] = new MONSTER5(new Vector2(0, 0)); break;
                    case "hero.MONSTER5_A": mbox[i] = new MONSTER5_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER5_B": mbox[i] = new MONSTER5_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER5_C": mbox[i] = new MONSTER5_C(new Vector2(0, 0)); break;


                    case "hero.MONSTER51": mbox[i] = new MONSTER51(new Vector2(0, 0)); break;
                    case "hero.MONSTER51_A": mbox[i] = new MONSTER51_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER51_B": mbox[i] = new MONSTER51_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER51_C": mbox[i] = new MONSTER51_C(new Vector2(0, 0)); break;



                    case "hero.MONSTER6": mbox[i] = new MONSTER6(new Vector2(0, 0)); break;
                    case "hero.MONSTER6_A": mbox[i] = new MONSTER6_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER6_B": mbox[i] = new MONSTER6_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER6_C": mbox[i] = new MONSTER6_C(new Vector2(0, 0)); break;

                    case "hero.MONSTER7": mbox[i] = new MONSTER7(new Vector2(0, 0)); break;
                    case "hero.MONSTER7_A": mbox[i] = new MONSTER7_A(new Vector2(0, 0)); break;
                    case "hero.MONSTER7_B": mbox[i] = new MONSTER7_B(new Vector2(0, 0)); break;
                    case "hero.MONSTER7_C": mbox[i] = new MONSTER7_C(new Vector2(0, 0)); break;




                    case "hero.BOSS1": mbox[i] = new BOSS1(new Vector2(0, 0)); break;
                    case "hero.BOSS2": mbox[i] = new BOSS2(new Vector2(0, 0)); break;
                    case "hero.BOSS3": mbox[i] = new BOSS3(new Vector2(0, 0)); break;
                    case "hero.BOSS4": mbox[i] = new BOSS4(new Vector2(0, 0)); break;
                    case "hero.BOSS5": mbox[i] = new BOSS5(new Vector2(0, 0)); break;
                    case "hero.BOSS5_G": mbox[i] = new BOSS5_G(new Vector2(0, 0)); break;
                    case "hero.BOSS6": mbox[i] = new BOSS6(new Vector2(0, 0)); break;
                    case "hero.BOSS7": mbox[i] = new BOSS7(new Vector2(0, 0)); break;
                    case "hero.BOSS51": mbox[i] = new BOSS51(new Vector2(0, 0)); break;

                        
                }
                mbox[i].X = GP.getLocAry[i].X;
                mbox[i].Y = GP.getLocAry[i].Y;
                BOX.Add(mbox[i]);
            }

          
        }







        public int getGROUP
        {
            get
            {
                return GROUP;
            }
        }


        public int getNextTime
        {
            get
            {
                return Time;
            }
        }
    }
}
