using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;

namespace hero
{
    public class myHERO
    {
        public int HERO_S;//關卡難度
        public int HERO_R;//能力值
        public int HERO_Money;//現金餘額
        public int HERO_LV;//第一關與最後一關
        public int HERO_A2;//攻擊力
        public int HERO_B2;//連續發射
        public int HERO_C2;//子彈數量
        public int HERO_D2;//移動速度
        public int HERO_E2;//HP量
        public int Score;//分數
        public int HERO_LIFE;//生命

        public void Save()
        {
            HERO_S = GamePage.HERO_S;
            HERO_R = GamePage.HERO_R;
            HERO_LV = GamePage.HERO_LV;
            HERO_A2 = GamePage.HERO_A2;
            HERO_B2 = GamePage.HERO_B2;
            HERO_C2 = GamePage.HERO_C2;
            HERO_D2 = GamePage.HERO_D2;
            HERO_E2 = GamePage.HERO_E2;
            Score = GamePage.HERO_SCORE;
            HERO_Money = GamePage.HERO_Money;//存紀錄 初始分數
            HERO_LIFE = GamePage.HERO_LIFE;
            HERO_Money = GamePage.HERO_Money;//存紀錄 出始金錢



            if (GamePage.LOCAL2 == "遊戲")
            {
                Score = GamePage.HERO_SCORE2;//存紀錄 初始分數
                HERO_LIFE = GamePage.HERO_LIFE2;//存出始生命
            }
            else
            {
                Score = GamePage.HERO_SCORE;
                HERO_LIFE = GamePage.HERO_LIFE;
            }

        }


        public void Read()
        {
            GamePage.HERO_S = HERO_S;
            GamePage.HERO_R = HERO_R;
            GamePage.HERO_Money = HERO_Money;
            GamePage.HERO_LV = HERO_LV;
            GamePage.HERO_A2 = HERO_A2;
            GamePage.HERO_B2 = HERO_B2;
            GamePage.HERO_C2 = HERO_C2;
            GamePage.HERO_D2 = HERO_D2;
            GamePage.HERO_E2 = HERO_E2;
            GamePage.HERO_SCORE = Score;
            GamePage.HERO_SCORE2 = Score;
            GamePage.HERO_LIFE = HERO_LIFE;
        }


        public void newGameRead(string str)
        {

            /*
            GamePage.HERO_S = 2;
            GamePage.HERO_R = 0;
            GamePage.HERO_Money = 100000;//金錢
            GamePage.HERO_LV = 22;//關卡等級
            GamePage.HERO_A2 = 80;//攻擊力
            GamePage.HERO_B2 = 40;//攻擊速度
            GamePage.HERO_C2 = 30;//球數量
            GamePage.HERO_D2 = 50;//移動速度
            GamePage.HERO_E2 = 20;//HP
            GamePage.HERO_SCORE = 871146;
            GamePage.HERO_SCORE2 = Score;
            GamePage.HERO_LIFE = 100;//生命
 
            return;
            */

           
            
            if(str == "輕鬆"){
                GamePage.HERO_S = 0;
                GamePage.HERO_R = 10;
                GamePage.HERO_Money = 0;//金錢
                GamePage.HERO_LV = 0;//關卡等級
                GamePage.HERO_A2 = 12;//攻擊力
                GamePage.HERO_B2 = 12;//攻擊速度
                GamePage.HERO_C2 = 8;//球數量
                GamePage.HERO_D2 = 5;//移動速度
                GamePage.HERO_E2 = 3;//HP
                GamePage.HERO_SCORE = 0;
                GamePage.HERO_SCORE2 = Score;
                GamePage.HERO_LIFE = 3;//生命
            }else



            if (str == "正常")
            {
                GamePage.HERO_S = 1;
                GamePage.HERO_R = 25;
                GamePage.HERO_Money = 0;//金錢
                GamePage.HERO_LV = 0;//關卡等級
                GamePage.HERO_A2 = 1;//攻擊力
                GamePage.HERO_B2 = 1;//攻擊速度
                GamePage.HERO_C2 = 1;//球數量
                GamePage.HERO_D2 = 1;//移動速度
                GamePage.HERO_E2 = 1;//HP
                GamePage.HERO_SCORE = 0;
                GamePage.HERO_SCORE2 = Score;
                GamePage.HERO_LIFE = 3;//生命
            }else



            if (str == "困難")
            {
                GamePage.HERO_S = 2;
                GamePage.HERO_R = 20;
                GamePage.HERO_Money = 0;//金錢
                GamePage.HERO_LV = 0;//關卡等級
                GamePage.HERO_A2 = 1;//攻擊力
                GamePage.HERO_B2 = 1;//攻擊速度
                GamePage.HERO_C2 = 1;//球數量
                GamePage.HERO_D2 = 1;//移動速度
                GamePage.HERO_E2 = 1;//HP
                GamePage.HERO_SCORE = 0;
                GamePage.HERO_SCORE2 = Score;
                GamePage.HERO_LIFE = 3;//生命
            }

        }
    }
}
