using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;

namespace BOBO
{
    class Lvalue
    {

        public Box[] box;//存放不明物
        public int[] Updatebox;//哪些不明物 是需要update 
        public int boxMax;//box最大值
        public Vector2 ballPos;//球的起始做標
        public Vector2 passPos;//破關坐標
        public Lvalue(int L)
        {


            switch (L)
            {
                case 1: setBox1() ; break;
                case 2: setBox2(); break;
                case 3: setBox3(); break;
                case 4: setBox4(); break;
                case 5: setBox5(); break;
                case 6: setBox6(); break;
                case 7: setBox7(); break;
                case 8: setBox8(); break;
                case 9: setBox9(); break;

                case 10: setBox10(); break;
                case 11: setBox11(); break;
                case 12: setBox12(); break;
                case 13: setBox13(); break;
                case 14: setBox14(); break;
                case 15: setBox15(); break;
                case 16: setBox16(); break;
                case 17: setBox17(); break;
                case 18: setBox18(); break;
                case 19: setBox19(); break;
                case 20: setBox20(); break;
            }
            setUpdatebox();

        }









        public void setBox1()
        {
            ballPos = new Vector2(50, 350);
            passPos = new Vector2(700, 150);
            boxMax = 16;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            box[4] = new Zbox(Game1.picZ2, new Vector2(50, 250), 1);
            box[5] = new Zbox(Game1.picZ2, new Vector2(100, 250), 1);
            box[6] = new Zbox(Game1.picZ2, new Vector2(100, 350), 1);
            box[7] = new Zbox(Game1.picZ2, new Vector2(0, 250), 1);

            box[8] = new Zbox(Game1.picZ2, new Vector2(150, 50), 2);
            box[9] = new Zbox(Game1.picZ2, new Vector2(250, 250), 2);
            box[10] = new Zbox(Game1.picZ2, new Vector2(700, 0), 2);
            box[11] = new Zbox(Game1.picZ2, new Vector2(700, 250), 2);

            box[12] = new Zbox(Game1.picZ2, new Vector2(650, 50), 1);
            box[13] = new Zbox(Game1.picZ2, new Vector2(650, 250), 1);

            box[14] = new Zbox(Game1.picZ2, new Vector2(600, 100), 1);
            box[15] = new Zbox(Game1.picZ2, new Vector2(600, 200), 1);
        }




        public void setBox2()
        {
            ballPos = new Vector2(25, 25);
            passPos = new Vector2(750, 350);
            boxMax = 8;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            box[4] = new ZLine(Game1.picZ1, new Vector2(0, 100), new Vector2(600, 100));
            box[5] = new ZLine(Game1.picZ1, new Vector2(100, 200), new Vector2(800, 200));
            box[6] = new ZLine(Game1.picZ1, new Vector2(0, 250), new Vector2(700, 250));
            box[7] = new ZLine(Game1.picZ1, new Vector2(100, 300), new Vector2(800, 300));

        }



        public void setBox3()
        {
            ballPos = new Vector2(50, 350);
            passPos = new Vector2(10, 10);
            boxMax = 13;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            box[4] = new ZLine(Game1.picZ1, new Vector2(100, 100), new Vector2(100, 400));//第一條線
            box[5] = new ZLine(Game1.picZ1, new Vector2(200, 50), new Vector2(200, 350));//第二條線
            box[6] = new ZLine(Game1.picZ1, new Vector2(300, 100), new Vector2(300, 400));//第三條線
            box[7] = new ZLine(Game1.picZ1, new Vector2(300, 100), new Vector2(600, 100));//第四條線
            box[8] = new ZLine(Game1.picZ1, new Vector2(350, 200), new Vector2(700, 200));//第五條線
            box[9] = new ZLine(Game1.picZ1, new Vector2(350, 200), new Vector2(350, 350));//第六條線
            box[10] = new ZLine(Game1.picZ1, new Vector2(350, 350), new Vector2(700, 350));//第七條線
            box[11] = new ZLine(Game1.picZ1, new Vector2(700, 48), new Vector2(700, 350));//第八條線
            box[12] = new ZLine(Game1.picZ1, new Vector2(0, 50), new Vector2(700, 50));//第九條線
        }




        public void setBox4()
        {
            ballPos = new Vector2(600, 250);
            passPos = new Vector2(20, 370);
            boxMax = 31;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            box[4] = new ZLine(Game1.picZ1, new Vector2(650, 250), new Vector2(650, 400));//第一條線
            box[5] = new ZLine(Game1.picZ1, new Vector2(550, 250), new Vector2(550, 350));//第二條線
            box[6] = new ZLine(Game1.picZ1, new Vector2(550, 350), new Vector2(450, 350));//第三條線
            box[7] = new ZLine(Game1.picZ1, new Vector2(450, 350), new Vector2(450, 300));//第四條線
            box[8] = new ZLine(Game1.picZ1, new Vector2(450, 300), new Vector2(400, 300));//第五條線



            box[9] = new ZLine(Game1.picZ1, new Vector2(400, 300), new Vector2(400, 250));//第六條線
            box[10] = new ZLine(Game1.picZ1, new Vector2(400, 250), new Vector2(350, 250));//第七條線
            box[11] = new ZLine(Game1.picZ1, new Vector2(350, 250), new Vector2(350, 200));//第八條線
            box[12] = new ZLine(Game1.picZ1, new Vector2(150, 200), new Vector2(150, 250));//第九條線
            box[13] = new ZLine(Game1.picZ1, new Vector2(400, 250), new Vector2(350, 250));//第十條線
            box[14] = new ZLine(Game1.picZ1, new Vector2(150, 250), new Vector2(100, 250));//第十一條線
            box[15] = new ZLine(Game1.picZ1, new Vector2(100, 250), new Vector2(100, 300));//第12條線
            box[16] = new ZLine(Game1.picZ1, new Vector2(100, 300), new Vector2(50, 300));//第13條線
            box[17] = new ZLine(Game1.picZ1, new Vector2(50, 300), new Vector2(50, 350));//第14條線
            box[18] = new ZLine(Game1.picZ1, new Vector2(50, 350), new Vector2(0, 350));//第15條線
            box[19] = new ZLine(Game1.picZ1, new Vector2(350, 200), new Vector2(150, 200));//第16條線







            box[20] = new ZLine(Game1.picZ1, new Vector2(400, 400), new Vector2(400, 350));//第六條線
            box[21] = new ZLine(Game1.picZ1, new Vector2(400, 350), new Vector2(350, 350));//第七條線
            box[22] = new ZLine(Game1.picZ1, new Vector2(350, 350), new Vector2(350, 300));//第八條線
            box[23] = new ZLine(Game1.picZ1, new Vector2(350, 300), new Vector2(300, 300));//第九條線
            box[24] = new ZLine(Game1.picZ1, new Vector2(300, 300), new Vector2(300, 250));//第十條線
            box[25] = new ZLine(Game1.picZ1, new Vector2(300, 250), new Vector2(200, 250));//第十一條線
            box[26] = new ZLine(Game1.picZ1, new Vector2(200, 250), new Vector2(200, 300));//第12條線
            box[27] = new ZLine(Game1.picZ1, new Vector2(200, 300), new Vector2(150, 300));//第13條線

            box[28] = new ZLine(Game1.picZ1, new Vector2(150, 300), new Vector2(150, 350));//第14條線

            box[29] = new ZLine(Game1.picZ1, new Vector2(150, 350), new Vector2(100, 350));//第15條線
            box[30] = new ZLine(Game1.picZ1, new Vector2(100, 350), new Vector2(100, 400));//第16條線




        }






        public void setBox5()
        {
            ballPos = new Vector2(80, 20);
            passPos = new Vector2(770, 25);
            boxMax = 20;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            //-------------------------------------------------------------
            box[4] = new ZLine(Game1.picZ1, new Vector2(750, 0), new Vector2(750, 350));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(750, 350), new Vector2(450, 350));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(450, 350), new Vector2(450, 250));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(450, 250), new Vector2(550, 250));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(550, 250), new Vector2(550, 0));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(450, 100), new Vector2(500, 100));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(500, 100), new Vector2(500, 200));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(500, 200), new Vector2(350, 200));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(400, 150), new Vector2(450, 150));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(400, 0), new Vector2(400, 150));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(350, 100), new Vector2(350, 400));//11
            box[15] = new ZLine(Game1.picZ1, new Vector2(350, 300), new Vector2(0, 300));//12
            box[16] = new ZLine(Game1.picZ1, new Vector2(250, 0), new Vector2(250, 250));//13
            box[17] = new ZLine(Game1.picZ1, new Vector2(250, 250), new Vector2(150, 250));//14
            box[18] = new ZLine(Game1.picZ1, new Vector2(150, 250), new Vector2(150, 0));//15


            box[19] = new Zvbox(Game1.picZ2, new Vector2(350, 150), 1, 2, 5, 20, 1);//C3
        }




        public void setBox6()
        {


            ballPos = new Vector2(10, 10);
            passPos = new Vector2(560, 350);
            boxMax = 28;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));



            box[4] = new ZLine(Game1.picZ1, new Vector2(0, 50), new Vector2(150, 50));
            box[5] = new ZLine(Game1.picZ1, new Vector2(150, 50), new Vector2(150, 200));
            box[6] = new ZLine(Game1.picZ1, new Vector2(150, 200), new Vector2(250, 200));
            box[7] = new ZLine(Game1.picZ1, new Vector2(250, 200), new Vector2(250, 250));
            box[8] = new ZLine(Game1.picZ1, new Vector2(250, 250), new Vector2(100, 250));
            box[9] = new ZLine(Game1.picZ1, new Vector2(100, 250), new Vector2(100, 400));
            box[10] = new ZLine(Game1.picZ1, new Vector2(500, 350), new Vector2(500, 100));

            box[11] = new ZLine(Game1.picZ1, new Vector2(200, 0), new Vector2(200, 100));
            box[12] = new ZLine(Game1.picZ1, new Vector2(200, 100), new Vector2(300, 100));
            box[13] = new ZLine(Game1.picZ1, new Vector2(300, 100), new Vector2(300, 300));
            box[14] = new ZLine(Game1.picZ1, new Vector2(300, 300), new Vector2(150, 300));
            box[15] = new ZLine(Game1.picZ1, new Vector2(150, 350), new Vector2(150, 350));
            box[16] = new ZLine(Game1.picZ1, new Vector2(150, 350), new Vector2(500, 350));
            box[17] = new ZLine(Game1.picZ1, new Vector2(150, 300), new Vector2(150, 350));

            box[18] = new ZLine(Game1.picZ1, new Vector2(150, 350), new Vector2(150, 350));
            box[19] = new ZLine(Game1.picZ1, new Vector2(500, 100), new Vector2(800, 100));


            box[20] = new ZLine(Game1.picZ1, new Vector2(550, 150), new Vector2(550, 400));
            box[21] = new ZLine(Game1.picZ1, new Vector2(550, 150), new Vector2(750, 150));
            box[22] = new ZLine(Game1.picZ1, new Vector2(750, 350), new Vector2(750, 150));


            box[23] = new ZLine(Game1.picZ1, new Vector2(750, 350), new Vector2(650, 350));
            box[24] = new ZLine(Game1.picZ1, new Vector2(650, 350), new Vector2(650, 250));
            box[25] = new ZLine(Game1.picZ1, new Vector2(700, 300), new Vector2(700, 200));
            box[26] = new ZLine(Game1.picZ1, new Vector2(700, 200), new Vector2(600, 200));
            box[27] = new ZLine(Game1.picZ1, new Vector2(600, 200), new Vector2(600, 400));
 


        }











        public void setBox7()
        {

            ballPos = new Vector2(400, 350);
            passPos = new Vector2(100, 370);
            boxMax = 16;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            box[4] = new ZLine(Game1.picZ1, new Vector2(450, 400), new Vector2(450, 250));//第一條線
            box[5] = new ZLine(Game1.picZ1, new Vector2(450, 250), new Vector2(200, 250));//第二條線
            box[6] = new ZLine(Game1.picZ1, new Vector2(150, 400), new Vector2(150, 150));//第三條線
            box[7] = new ZLine(Game1.picZ1, new Vector2(150, 150), new Vector2(550, 150));//第四條線
            box[8] = new ZLine(Game1.picZ1, new Vector2(550, 150), new Vector2(550, 250));//第五條線


            box[9] = new ZLine(Game1.picZ1, new Vector2(50, 100), new Vector2(50, 200));//第六條線
            box[10] = new ZLine(Game1.picZ1, new Vector2(100, 150), new Vector2(100, 250));//第七條線
            box[11] = new ZLine(Game1.picZ1, new Vector2(50, 350), new Vector2(150, 350));//第八條線



            box[12] = new Zbox2(200,70,15,true);//斜線
            box[13] = new Zbox2(210, 0, 19, true);//斜線
            box[14] = new Zbox2(350, 70, 15, true);//斜線
            box[15] = new Zbox2(360, 0, 19, true);//斜線
        }



        public void setBox8()
        {
            ballPos = new Vector2(50, 350);
            passPos = new Vector2(570, 10);
            boxMax = 20;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //--------
            box[4] = new ZLine(Game1.picZ1, new Vector2(0, 300), new Vector2(150, 300));//第一條線
            box[5] = new ZLine(Game1.picZ1, new Vector2(250, 400), new Vector2(250, 200));//第二條線
            box[6] = new ZLine(Game1.picZ1, new Vector2(250, 200), new Vector2(100, 200));//第三條線
            box[7] = new ZLine(Game1.picZ1, new Vector2(100, 200), new Vector2(100, 50));//第四條線
            box[8] = new ZLine(Game1.picZ1, new Vector2(300, 0), new Vector2(300, 250));//第五條線


            box[9] = new ZLine(Game1.picZ1, new Vector2(300, 250), new Vector2(350, 250));//第6條線
            box[10] = new ZLine(Game1.picZ1, new Vector2(350, 250), new Vector2(350, 0));//第7條線




            box[11] = new Zvbox(Game1.picZ2, new Vector2(0, 100), 1, 0, 5, 20, 0);//C1
            box[12] = new Zvbox(Game1.picZ2, new Vector2(500, 250), 1, 1, 5, 20, 0);//C2
            box[13] = new Zvbox(Game1.picZ2, new Vector2(450, 200), 1, 2, 5, 30, 0);//C3
            box[14] = new Zvbox(Game1.picZ2, new Vector2(600, 150), 1, 2, 5, 40, 0);//C3
            box[15] = new Zvbox(Game1.picZ2, new Vector2(400, 50), 2, 2, 5, 40, 0);//C3


            box[16] = new Zvbox(Game1.picZ2, new Vector2(50, 250), 1, 1, 5, 20, 3);//C2
            box[17] = new Zvbox(Game1.picZ2, new Vector2(400, 150), 1, 2, 6, 30, 2);//C3
            box[18] = new Zvbox(Game1.picZ2, new Vector2(450, 100), 1, 2, 6, 20, 1);//C3
            box[19] = new Zvbox(Game1.picZ2, new Vector2(500, 50), 1, 2, 5, 30, 1);//C3


        }




        public void setBox9()
        {
            ballPos = new Vector2(350, 350);
            passPos = new Vector2(670, 370);
            boxMax = 25;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(250, 400), new Vector2(250, 350));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(250, 350), new Vector2(150, 350));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(150, 350), new Vector2(150, 300));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(150, 300), new Vector2(50, 300));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(50, 300), new Vector2(50, 50));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(50, 50), new Vector2(700, 50));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(700, 50), new Vector2(700, 400));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(450, 400), new Vector2(450, 250));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(450, 250), new Vector2(250, 250));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(250, 250), new Vector2(250, 150));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(250, 150), new Vector2(150, 150));//11



            box[15] = new Zbox3(Game1.picZ2, new Vector2(600, 200),true, 2,30,80);
            box[16] = new Zbox3(Game1.picZ2, new Vector2(200, 100), false, 1, 15, 50);
            box[17] = new Zbox3(Game1.picZ2, new Vector2(470, 280), false, 2, 40, 100);
            box[18] = new Zbox3(Game1.picZ2, new Vector2(480, 200), true, 1, 15, 50);
            box[19] = new Zvbox(Game1.picZ2, new Vector2(50, 260), 1, 2, 5, 20, 1);//C3
            box[20] = new Zvbox(Game1.picZ2, new Vector2(550, 350), 1, 2, 4, 28, 1);//C3

            box[21] = new Zbox3(Game1.picZ2, new Vector2(270, 70), false, 1, 20, 30);

            box[22] = new Zbox3(Game1.picZ2, new Vector2(300, 100), true, 1, 50, 80);

            box[23] = new Zbox3(Game1.picZ2, new Vector2(500, 60), true, 1, 30, 60);

            box[24] = new Zbox3(Game1.picZ2, new Vector2(400, 100), false, 1, 20, 50);
        }














 













        public void setBox10()
        {
            ballPos = new Vector2(770, 25);
            passPos = new Vector2(80, 20);
            boxMax = 24;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            //-------------------------------------------------------------
            box[4] = new ZLine(Game1.picZ1, new Vector2(750, 0), new Vector2(750, 350));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(750, 350), new Vector2(450, 350));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(450, 350), new Vector2(450, 250));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(450, 250), new Vector2(550, 250));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(550, 250), new Vector2(550, 0));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(450, 100), new Vector2(500, 100));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(500, 100), new Vector2(500, 200));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(500, 200), new Vector2(350, 200));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(400, 150), new Vector2(450, 150));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(400, 0), new Vector2(400, 150));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(350, 100), new Vector2(350, 400));//11
            box[15] = new ZLine(Game1.picZ1, new Vector2(350, 300), new Vector2(0, 300));//12
            box[16] = new ZLine(Game1.picZ1, new Vector2(250, 0), new Vector2(250, 250));//13
            box[17] = new ZLine(Game1.picZ1, new Vector2(250, 250), new Vector2(150, 250));//14
            box[18] = new ZLine(Game1.picZ1, new Vector2(150, 250), new Vector2(150, 0));//15


            box[19] = new Zvbox(Game1.picZ2, new Vector2(400, 250), 1, 1, 5, 20, 0);//A1
            box[20] = new Zvbox(Game1.picZ2, new Vector2(250, 150), 1, 1, 5, 20, 0);//A2


            box[21] = new Zvbox(Game1.picZ2, new Vector2(100, 50), 1, 0, 4, 24, 1);//C1
            box[22] = new Zvbox(Game1.picZ2, new Vector2(0, 150), 1, 0, 4, 24, 0);//C2
            box[23] = new Zvbox(Game1.picZ2, new Vector2(100, 200), 1, 0, 5, 20, 1);//C2



        }


        public void setBox11()
        {

            ballPos = new Vector2(650, 150);
            passPos = new Vector2(80, 350);
            boxMax = 23;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            //-------------------------------------------------------------
            box[4] = new ZLine(Game1.picZ1, new Vector2(700, 200), new Vector2(600, 200));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(600, 200), new Vector2(600, 50));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(600, 50), new Vector2(750, 50));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(750, 50), new Vector2(750, 250));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(750, 250), new Vector2(500, 250));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(500, 0), new Vector2(500, 300));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(500, 300), new Vector2(350, 300));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(350, 300), new Vector2(350, 0));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(200, 400), new Vector2(200, 100));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(200, 100), new Vector2(150, 100));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(150, 100), new Vector2(150, 400));//11


            box[15] = new Zvbox(Game1.picZ2, new Vector2(350, 300), 1, 0, 4, 35, 1);//B1

            box[16] = new Zvbox(Game1.picZ2, new Vector2(200, 250), 1, 0, 4, 28, 0);//B2
            box[17] = new Zvbox(Game1.picZ2, new Vector2(200, 0), 1, 1, 4, 35, 0);//B3

            box[18] = new Zvbox(Game1.picZ2, new Vector2(100, 180), 1, 0, 4, 30, 1);//B6
            box[19] = new Zvbox(Game1.picZ2, new Vector2(0, 200), 1, 0, 4, 30, 0);//B7

            box[20] = new Zvbox(Game1.picZ2, new Vector2(550, 270), 1, 2, 4, 20, 0);//C1


            box[21] = new Zbox2(200, 70, 15, true);//斜線
            box[22] = new Zbox2(210, 0, 19, true);//斜線
        }



        public void setBox12()
        {
            ballPos = new Vector2(750, 370);
            passPos =  new Vector2(25, 25);
            boxMax = 18;




            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            box[4] = new ZLine(Game1.picZ1, new Vector2(0, 100), new Vector2(600, 100));
            box[5] = new ZLine(Game1.picZ1, new Vector2(100, 190), new Vector2(800, 190));
            box[6] = new ZLine(Game1.picZ1, new Vector2(0, 230), new Vector2(700, 230));
            box[7] = new ZLine(Game1.picZ1, new Vector2(100, 270), new Vector2(800, 270));


            box[8] = new ZLine(Game1.picZ1, new Vector2(0, 310), new Vector2(500, 310));
            box[9] = new ZLine(Game1.picZ1, new Vector2(800, 350), new Vector2(50, 350));


            box[10] = new Zvbox(Game1.picZ2, new Vector2(200, 250), 2, 2, 4, 50, 0);//C1
            box[11] = new Zvbox(Game1.picZ2, new Vector2(300, 270), 1, 1, 3, 50, 0);//C1
            box[12] = new Zvbox(Game1.picZ2, new Vector2(0, 0), 2, 2, 4, 35, 0);//C1
            box[13] = new Zvbox(Game1.picZ2, new Vector2(300, 0), 2, 2, 4, 40, 0);//C1


            box[13] = new Zvbox(Game1.picZ2, new Vector2(330, 0), 1, 1, 3, 45, 0);//C1

            box[14] = new Zvbox(Game1.picZ2, new Vector2(360, 50), 1, 1, 3, 40, 0);//C1



            box[15] = new Zvbox(Game1.picZ2, new Vector2(500, 250), 1, 1, 3, 50, 0);//C1


            box[16] = new Zbox3(Game1.picZ2, new Vector2(460, 60), true, 1, 35, 60);
            box[17] = new Zbox3(Game1.picZ2, new Vector2(460, 10), true, 1, 35, 60);
        }








        public void setBox13()
        {
            ballPos = new Vector2(30, 360);
            passPos = new Vector2(410, 10);
            boxMax = 36;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(400, 0), new Vector2(400, 200));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(400, 200), new Vector2(600, 200));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(600, 200), new Vector2(600, 350));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(600, 350), new Vector2(450, 350));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(450, 350), new Vector2(450, 300));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(450, 300), new Vector2(400, 300));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(400, 300), new Vector2(400, 250));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(400, 250), new Vector2(350, 250));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(350, 250), new Vector2(350, 200));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(350, 200), new Vector2(150, 200));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(150, 200), new Vector2(150, 250));//11




            box[15] = new ZLine(Game1.picZ1, new Vector2(150, 250), new Vector2(100, 250));//12
            box[16] = new ZLine(Game1.picZ1, new Vector2(100, 250), new Vector2(100, 300));//13
            box[17] = new ZLine(Game1.picZ1, new Vector2(100, 300), new Vector2(50, 300));//14
            box[18] = new ZLine(Game1.picZ1, new Vector2(50, 300), new Vector2(50, 350));//15
            box[19] = new ZLine(Game1.picZ1, new Vector2(50, 350), new Vector2(0, 350));//16
            box[20] = new ZLine(Game1.picZ1, new Vector2(410, 400), new Vector2(410, 340));//17
            box[21] = new ZLine(Game1.picZ1, new Vector2(410, 340), new Vector2(360, 340));//18


            box[22] = new ZLine(Game1.picZ1, new Vector2(360, 340), new Vector2(360, 290));//19
            box[23] = new ZLine(Game1.picZ1, new Vector2(360, 290), new Vector2(310, 290));//20
            box[24] = new ZLine(Game1.picZ1, new Vector2(310, 290), new Vector2(310, 240));//21
            box[25] = new ZLine(Game1.picZ1, new Vector2(310, 240), new Vector2(190, 240));//22
            box[26] = new ZLine(Game1.picZ1, new Vector2(190, 240), new Vector2(190, 290));//23
            box[27] = new ZLine(Game1.picZ1, new Vector2(190, 290), new Vector2(140, 290));//24
            box[28] = new ZLine(Game1.picZ1, new Vector2(140, 290), new Vector2(140, 340));//25
            box[29] = new ZLine(Game1.picZ1, new Vector2(140, 340), new Vector2(90, 340));//26
            box[30] = new ZLine(Game1.picZ1, new Vector2(90, 340), new Vector2(90, 400));//27
            box[31] = new ZLine(Game1.picZ1, new Vector2(700, 0), new Vector2(700, 400));//28







            box[32] = new Zbox2(700, 20, 25, false);//斜線
            box[33] = new Zbox2(400, 40, 20, true);//斜線
            box[34] = new Zbox2(600, 40, 30, false);//斜線
            box[35] = new Zbox2(450, 0, 12, true);//斜線
        }







        public void setBox14()
        {
            ballPos = new Vector2(10, 10);
            passPos = new Vector2(230, 370);
            boxMax = 28;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(200, 400), new Vector2(200, 200));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(200, 350), new Vector2(700, 350));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(200, 200), new Vector2(650, 200));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(650, 200), new Vector2(650, 150));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(650, 150), new Vector2(200, 150));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(200, 150), new Vector2(200, 40));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(200, 40), new Vector2(0, 40));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(750, 400), new Vector2(750, 300));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(750, 300), new Vector2(700, 300));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(250, 250), new Vector2(800, 250));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(700, 250), new Vector2(700, 100));//11


            box[15] = new ZLine(Game1.picZ1, new Vector2(700, 100), new Vector2(550, 100));//12
            box[16] = new ZLine(Game1.picZ1, new Vector2(550, 100), new Vector2(550, 50));//13
            box[17] = new ZLine(Game1.picZ1, new Vector2(550, 50), new Vector2(500, 50));//14
            box[18] = new ZLine(Game1.picZ1, new Vector2(500, 50), new Vector2(500, 100));//15
            box[19] = new ZLine(Game1.picZ1, new Vector2(500, 100), new Vector2(250, 100));//16
            box[20] = new ZLine(Game1.picZ1, new Vector2(250, 100), new Vector2(250, 0));//17
            box[21] = new Zvbox(Game1.picZ2, new Vector2(660, 110), 1, 0, 5, 90, 1);//C2


            box[22] = new Zvbox(Game1.picZ2, new Vector2(300, 250), 1, 1, 3, 37, 0);//C1
            box[23] = new Zvbox(Game1.picZ2, new Vector2(330, 250), 1, 1, 3, 37, 0);//C1
            box[24] = new Zvbox(Game1.picZ2, new Vector2(360, 250), 1, 1, 3, 37, 0);//C1
            box[25] = new Zvbox(Game1.picZ2, new Vector2(450, 200), 1, 1, 4, 28, 0);//C1
            box[26] = new Zvbox(Game1.picZ2, new Vector2(480, 200), 1, 1, 4, 28, 0);//C1
            box[27] = new Zvbox(Game1.picZ2, new Vector2(510, 200), 1, 1, 4, 28, 0);//C1

        }





        public void setBox15()
        {
            ballPos = new Vector2(140, 360);
            passPos = new Vector2(50, 255);
            boxMax = 27;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(100, 400), new Vector2(100, 350));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(100, 350), new Vector2(250, 350));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(250, 350), new Vector2(250, 150));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(250, 150), new Vector2(750, 150));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(750, 150), new Vector2(750, 40));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(750, 40), new Vector2(40, 40));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(40, 40), new Vector2(40, 150));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(40, 150), new Vector2(100, 150));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(100, 150), new Vector2(100, 300));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(100, 300), new Vector2(0, 300));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(300, 400), new Vector2(300, 190));//11
            box[15] = new ZLine(Game1.picZ1, new Vector2(300, 190), new Vector2(800, 190));//12


            box[16] = new Zbox3(Game1.picZ2, new Vector2(0, 0), false, 1, 80, 10);
            box[17] = new Zbox3(Game1.picZ2, new Vector2(100, 0), false, 1, 80, 50);
            box[18] = new Zbox3(Game1.picZ2, new Vector2(200, 0), false, 1, 80, 10);
            box[19] = new Zbox3(Game1.picZ2, new Vector2(300, 0), false, 1, 140, 10);
            box[20] = new Zbox3(Game1.picZ2, new Vector2(400, 0), false, 1, 170, 20);
            box[21] = new Zbox3(Game1.picZ2, new Vector2(500, 0), false, 1, 200, 10);
            box[22] = new Zbox3(Game1.picZ2, new Vector2(600, 0), false, 1, 230, 10);
            box[23] = new Zbox3(Game1.picZ2, new Vector2(650, 0), false, 1, 260, 15);



            box[24] = new Zbox3(Game1.picZ2, new Vector2(400, 150), false, 1, 80, 50);
            box[25] = new Zbox3(Game1.picZ2, new Vector2(600, 150), false, 1, 100, 50);
            box[26] = new Zbox3(Game1.picZ2, new Vector2(650, 150), false, 1, 100, 50);



        }




        public void setBox16()
        {
            ballPos = new Vector2(50, 350);
            passPos = new Vector2(600, 165);
            boxMax = 19;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(150, 25), new Vector2(150, 400));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(200, 0), new Vector2(200, 375));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(250, 25), new Vector2(250, 400));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(300, 0), new Vector2(300, 350));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(300, 350), new Vector2(750, 350));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(750, 350), new Vector2(750, 27));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(750, 27), new Vector2(350, 27));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(350, 27), new Vector2(350, 300));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(350, 300), new Vector2(700, 300));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(700, 300), new Vector2(700, 100));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(700, 100), new Vector2(400, 100));//11
            box[15] = new ZLine(Game1.picZ1, new Vector2(400, 100), new Vector2(400, 200));//12

            box[16] = new ZLine(Game1.picZ1, new Vector2(400, 200), new Vector2(650, 200));//13
            box[17] = new ZLine(Game1.picZ1, new Vector2(650, 200), new Vector2(650, 150));//14
            box[18] = new ZLine(Game1.picZ1, new Vector2(650, 150), new Vector2(435, 150));//15
        }

        public void setBox17()
        {
            ballPos = new Vector2(5, 370);
            passPos = new Vector2(710, 75);
            boxMax = 23;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(30, 400), new Vector2(30, 30));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(30, 30), new Vector2(750, 30));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(750, 30), new Vector2(750, 350));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(750, 350), new Vector2(100, 350));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(100, 350), new Vector2(100, 100));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(100, 100), new Vector2(400, 100));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(400, 100), new Vector2(400, 350));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(500, 30), new Vector2(500, 300));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(600, 100), new Vector2(600, 350));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(700, 30), new Vector2(700, 300));//10





            box[14] = new Zvbox(Game1.picZ2, new Vector2(270, 350), 1, 1, 3, 30, 0);//C1
            box[15] = new Zvbox(Game1.picZ2, new Vector2(300, 350), 1, 1, 3, 50, 0);//C1
            box[16] = new Zvbox(Game1.picZ2, new Vector2(330, 350), 1, 1, 3, 80, 0);//C1
            box[17] = new Zvbox(Game1.picZ2, new Vector2(450, 350), 1, 1, 4, 50, 0);//C1
            box[18] = new Zvbox(Game1.picZ2, new Vector2(480, 350), 1, 1, 4, 60, 0);//C1
            box[19] = new Zvbox(Game1.picZ2, new Vector2(510, 350), 1, 1, 4, 30, 0);//C1


            box[20] = new Zvbox(Game1.picZ2, new Vector2(250, -50), 1, 1, 4, 30, 0);//C1
            box[21] = new Zvbox(Game1.picZ2, new Vector2(410, -50), 1, 1, 4, 60, 0);//C1
            box[22] = new Zvbox(Game1.picZ2, new Vector2(450, -50), 1, 1, 4, 70, 0);//C1



        }


        public void setBox18()
        {
            ballPos = new Vector2(770, 370);
            passPos = new Vector2(350, 350);
            boxMax = 33;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(800, 350), new Vector2(775, 350));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(775, 350), new Vector2(775, 250));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(775, 250), new Vector2(650, 250));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(650, 250), new Vector2(650, 200));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(650, 200), new Vector2(550, 200));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(550, 200), new Vector2(550, 150));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(450, 150), new Vector2(600, 150));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(600, 150), new Vector2(600, 0));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(700, 400), new Vector2(700, 300));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(700, 300), new Vector2(600, 300));//10


            box[14] = new ZLine(Game1.picZ1, new Vector2(600, 300), new Vector2(600, 250));//11
            box[15] = new ZLine(Game1.picZ1, new Vector2(600, 250), new Vector2(500, 250));//12
            box[16] = new ZLine(Game1.picZ1, new Vector2(500, 250), new Vector2(500, 200));//13
            box[17] = new ZLine(Game1.picZ1, new Vector2(500, 200), new Vector2(400, 200));//14
            box[18] = new ZLine(Game1.picZ1, new Vector2(400, 200), new Vector2(400, 100));//15
            box[19] = new ZLine(Game1.picZ1, new Vector2(300, 100), new Vector2(400, 100));//16
            box[20] = new ZLine(Game1.picZ1, new Vector2(300, 100), new Vector2(300, 300));//17
            box[21] = new ZLine(Game1.picZ1, new Vector2(300, 300), new Vector2(400, 300));//18
            box[22] = new ZLine(Game1.picZ1, new Vector2(400, 300), new Vector2(400, 400));//19
            box[23] = new ZLine(Game1.picZ1, new Vector2(100, 0), new Vector2(100, 400));//20



            box[24] = new Zvbox(Game1.picZ2, new Vector2(500, 200), 1, 2, 1, 30, 0);//C1
            box[25] = new Zvbox(Game1.picZ2, new Vector2(400, 50), 1, 2, 2, 30, 0);//C1
            box[26] = new Zvbox(Game1.picZ2, new Vector2(350, 100), 1, 2, 2, 30, 0);//C1



            box[27] = new Zbox2(180, 165, 16, false);//斜線
            box[28] = new Zbox2(140, 50, 20, true);//斜線
            box[29] = new Zbox2(340, 50, 35, false);//斜線
            box[30] = new Zbox2(190, 0, 12, true);//斜線

            box[31] = new Zbox3(Game1.picZ2, new Vector2(110, 0), false, 1, 50, 50);
            box[32] = new Zbox3(Game1.picZ2, new Vector2(130, 220), false, 1, 70, 50);

        }




        public void setBox19()
        {
            ballPos = new Vector2(400, 350);
            passPos = new Vector2(100, 370);
            boxMax = 47;


            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));

            box[4] = new ZLine(Game1.picZ1, new Vector2(450, 400), new Vector2(450, 250));//第一條線
            box[5] = new ZLine(Game1.picZ1, new Vector2(450, 250), new Vector2(200, 250));//第二條線
            box[6] = new ZLine(Game1.picZ1, new Vector2(150, 400), new Vector2(150, 150));//第三條線
            box[7] = new ZLine(Game1.picZ1, new Vector2(150, 150), new Vector2(550, 150));//第四條線
            box[8] = new ZLine(Game1.picZ1, new Vector2(550, 150), new Vector2(550, 250));//第五條線


            box[9] = new ZLine(Game1.picZ1, new Vector2(50, 100), new Vector2(50, 200));//第六條線
            box[10] = new ZLine(Game1.picZ1, new Vector2(100, 150), new Vector2(100, 250));//第七條線
            box[11] = new ZLine(Game1.picZ1, new Vector2(50, 350), new Vector2(150, 350));//第八條線


            for (int i = 12; i < 20;i++ )
            {
                box[i] = new Zbox3(Game1.picZ2, new Vector2(50 * (i - 12) + 200, 250), false, 1, 10+i, 50);
            }


            for (int i = 20; i < 28; i++)
            {
                box[i] = new Zbox3(Game1.picZ2, new Vector2(50 * (i - 20) + 200, 300), false, 1, 10 + i, 50);
            }

            for (int i = 28; i < 36; i++)
            {
                box[i] = new Zbox3(Game1.picZ2, new Vector2(50 * (i - 28) + 200, 350), false, 1, 10 + i, 50);
            }


            for (int i = 36; i < 47; i++)
            {
                box[i] = new Zvbox(Game1.picZ2, new Vector2(100 + 50 * (i - 36), 10), 1, 2, 4, 50, 0);//C1
            }
        }













        public void setBox20()
        {
            ballPos = new Vector2(10, 10);
            passPos = new Vector2(230, 370);
            boxMax = 38;

            //不明物建構
            box = new Box[boxMax];
            box[0] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(800, 0));
            box[1] = new ZLine(Game1.picZ1, new Vector2(0, 0), new Vector2(0, 400));
            box[2] = new ZLine(Game1.picZ1, new Vector2(800, 0), new Vector2(800, 400));
            box[3] = new ZLine(Game1.picZ1, new Vector2(0, 400), new Vector2(800, 400));


            //------
            box[4] = new ZLine(Game1.picZ1, new Vector2(200, 400), new Vector2(200, 200));//1
            box[5] = new ZLine(Game1.picZ1, new Vector2(200, 350), new Vector2(700, 350));//2
            box[6] = new ZLine(Game1.picZ1, new Vector2(200, 200), new Vector2(650, 200));//3
            box[7] = new ZLine(Game1.picZ1, new Vector2(650, 200), new Vector2(650, 150));//4
            box[8] = new ZLine(Game1.picZ1, new Vector2(650, 150), new Vector2(200, 150));//5
            box[9] = new ZLine(Game1.picZ1, new Vector2(200, 150), new Vector2(200, 40));//6
            box[10] = new ZLine(Game1.picZ1, new Vector2(200, 40), new Vector2(0, 40));//7
            box[11] = new ZLine(Game1.picZ1, new Vector2(750, 400), new Vector2(750, 300));//8
            box[12] = new ZLine(Game1.picZ1, new Vector2(750, 300), new Vector2(700, 300));//9
            box[13] = new ZLine(Game1.picZ1, new Vector2(250, 250), new Vector2(800, 250));//10
            box[14] = new ZLine(Game1.picZ1, new Vector2(700, 250), new Vector2(700, 100));//11


            box[15] = new ZLine(Game1.picZ1, new Vector2(700, 100), new Vector2(550, 100));//12
            box[16] = new ZLine(Game1.picZ1, new Vector2(550, 100), new Vector2(550, 50));//13
            box[17] = new ZLine(Game1.picZ1, new Vector2(550, 50), new Vector2(500, 50));//14
            box[18] = new ZLine(Game1.picZ1, new Vector2(500, 50), new Vector2(500, 100));//15
            box[19] = new ZLine(Game1.picZ1, new Vector2(500, 100), new Vector2(250, 100));//16
            box[20] = new ZLine(Game1.picZ1, new Vector2(250, 100), new Vector2(250, 0));//17
            box[21] = new Zvbox(Game1.picZ2, new Vector2(580, 110), 1, 0, 4, 30, 1);//C2


            box[22] = new Zvbox(Game1.picZ2, new Vector2(270, 350), 1, 1, 3, 30, 0);//C1
            box[23] = new Zvbox(Game1.picZ2, new Vector2(300, 350), 1, 1, 3, 50, 0);//C1
            box[24] = new Zvbox(Game1.picZ2, new Vector2(330, 350), 1, 1, 3, 80, 0);//C1
            box[25] = new Zvbox(Game1.picZ2, new Vector2(450, 350), 1, 1, 4, 50, 0);//C1
            box[26] = new Zvbox(Game1.picZ2, new Vector2(480, 350), 1, 1, 4, 60, 0);//C1
            box[27] = new Zvbox(Game1.picZ2, new Vector2(510, 350), 1, 1, 4, 30, 0);//C1



            for (int i = 28; i < 33; i++)
            {
                box[i] = new Zbox3(Game1.picZ2, new Vector2(50 * (i - 28)+250, 250), false, 1, 30 + i, 50);
            }


            for (int i = 33; i < 38; i++)
            {
                box[i] = new Zbox3(Game1.picZ2, new Vector2(50 * (i - 33) + 250, 300), false, 1, 30 + i, 50);
            }



        }





















        public void UPDATE()
        {


            if (Updatebox !=null)
            {
                for (int i = 0; i < Updatebox.Count(); i++)
                {
                    box[Updatebox[i]].UPDATE();
                }
            }
        }




        public void setUpdatebox(){
            int j=0;
            for (int i = 0; i < boxMax; i++)
            {
                if (box[i].CUPDATE())
                {
                    j++;
                }
            }




            if(j>0){
                Updatebox=new int[j];
                j=0;
                for (int i = 0; i < boxMax; i++)
                {
                    if (box[i].CUPDATE())
                    {
                        Updatebox[j]=i;
                        j++;
                    }
                }
            }
        }













        public bool match(BoundingBox A)
        {



            for (int i = 0; i < boxMax; i++)
            {
                if (box[i].Match(A))
                {
                    return true;
                }
            }

            return false;
        }


        public bool match(BoundingSphere A)
        {



            for (int i = 0; i < boxMax; i++)
            {
                if (box[i].Match(A))
                {
                    return true;
                }
            }

            return false;
        }
    }
}
