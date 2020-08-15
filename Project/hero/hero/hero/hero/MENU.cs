using System;
using System.Windows.Controls;
using TARY_Library;
using System.Windows;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;

namespace hero
{
    public class MENU : StackPanel
    {
        //遊戲關卡及能力值選單

        public int A_num = 0, B_num = 0, C_num = 0, D_num = 0, E_num = 0;
        public int A_num2 = 0, B_num2 = 0, C_num2 = 0, D_num2 = 0, E_num2 = 0;

        int V;//配點值
        public MENU()
        {
            

            Update();//將能力值分配各地方

        }


        public void ADD(char str){

            if (v == 0)
                return;


            switch (str)
            {
                case 'A': A_num2++; break;
                case 'B': B_num2++; break;
                case 'C': C_num2++; break;
                case 'D': D_num2++; break;
                case 'E': E_num2++; break;
            }
            v--;
        }




        public void SUB(char str)
        {
            switch (str)
            {
                case 'A':
                    if(A_num2>0 ){ A_num2--;}else{ return;};break;
                case 'B':
                    if(B_num2>0 ){ B_num2--;}else{ return;};break;
                case 'C':
                    if(C_num2>0 ){ C_num2--;}else{ return;};break;
                case 'D': 
                    if(D_num2>0 ){ D_num2--;}else{ return;};break;
                case 'E': 
                    if(E_num2>0 ){ E_num2--;}else{ return;};break;
            }
            v++;
        }

        public int v
        {
            get
            {
                return V;
            }
            set
            {
                V = value;
            }
        }



        public void Start()
        {
            GamePage.R_MFired.clear();//清除子彈
            GamePage.R_MonsterThg.clear();//清除寶物
            //GamePage.R_BAR.PowerLv = 0; 讓能量進入下一回合  可望提高生命的價值
            GamePage.HERO_Money2 = 0;//清除暫存
            GamePage.R_BAR.ResetBtn();

            //將能力值寫進英雄角色中
            GamePage.R_HERO = new HERO(GamePage.HERO_LOC);




            GamePage.HERO_R = v;

            //攻擊力
            GamePage.HERO_A2 = A_num + A_num2;
            GamePage.R_HERO.setATK((int)(GamePage.HERO_A2));
            

            //連續發射
            GamePage.HERO_B2 = B_num + B_num2;
            GamePage.R_BAR.tempMove = GamePage.HERO_B -(int)(GamePage.HERO_B2 * 0.6);            

            //子彈數量
            GamePage.HERO_C2 = C_num + C_num2;
            GamePage.R_HERO.setbullet(GamePage.HERO_C2);


            //移動速度
            GamePage.HERO_D2 = D_num + D_num2;
            GamePage.R_HERO.setF(GamePage.HERO_D + GamePage.HERO_D2);

            //HP量
            GamePage.HERO_E2 = E_num + E_num2;
            GamePage.R_HERO.setHP(GamePage.HERO_E2);



            //分數
            GamePage.R_BAR.Score = GamePage.HERO_SCORE;



            //生命  將生命複寫到暫存
            GamePage.HERO_LIFE2 = GamePage.HERO_LIFE;



            //開始遊戲

            if (GamePage.HERO_LV == 0) GamePage.HERO_LV = 1;

            GamePage.LOCAL = "遊戲";    
        }



        public  StackPanel FindPANEL()
        {
            return (StackPanel)(this.FindName("PANEL_MENU"));
        }





        public void Update()
        {
            GamePage.R_LV = null;
            GamePage._LV = null;
            A_num2 = 0;
            A_num = GamePage.HERO_A2;
            B_num2 = 0;
            B_num = GamePage.HERO_B2;
            C_num2 = 0;
            C_num = GamePage.HERO_C2;
            D_num2 = 0;
            D_num = GamePage.HERO_D2;
            E_num2 = 0;
            E_num = GamePage.HERO_E2;


            v = GamePage.HERO_R;

        }



    }
}
