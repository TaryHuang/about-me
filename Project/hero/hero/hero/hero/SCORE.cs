using System;
using System.Windows;
using TARY_Library;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
namespace hero
{
    public class SCORE
    {
        //若過關 就將分數轉換成金幣
        TARY_SCORE Score, Money;
        TARY_VIMG SCORE_VIM;

        bool T=false;//是否算完

        int NT;//多少分數轉換一元


        int Num1 = 100, Num2 = 150;//閒置時間

        int Temp_Money=0;//已算完的錢
        public SCORE(int Snum, int Mnum)
        {

            if (GamePage.HERO_S==0)
            {
                NT = (GamePage.HERO_LV + 3) * 2;
            }
            else
            {
                NT = (GamePage.HERO_LV + 2) * ((GamePage.HERO_S * 2) + 2);
            }






            //先將錢算完 若使用者想跳過算錢動作  即可將值給定
            Temp_Money = Mnum;
            Temp_Money += Snum / NT;
            if (Snum % NT != 0)
            {
                Temp_Money += 1;
            }


            Score = new TARY_SCORE(GamePage.picNum,new Vector2(200,200));
            Score.ScoreV = 7;
            Score.Size = 2;
            Score.Score = Snum;
            Score.Alpha = 0;
            Money = new TARY_SCORE(GamePage.picNum, new Vector2(160, 350));
            Money.Size = 2;
            Money.Score = Mnum;
            Money.Alpha = 0;
            Money.Prefix = "$";


            SCORE_VIM = new TARY_VIMG(GamePage.picSCORE, new Vector2(40, 200));
            SCORE_VIM.Size = 2;
            SCORE_VIM.Alpha = 0;
        }


        public void update()
        {
            //剛開始出現顯示，並閒置一秒時間

            if (Num1 >= 0)
            {
                Num1--;
                Score.Alpha+=0.11f;
                Money.Alpha+=0.11f;
                SCORE_VIM.Alpha += 0.11f;
                return;
            }

            if (T)
            {
                if (Num2 >= 0)
                {
                    Num2--;
                    return;
                }
                else
                {

                    //將分數轉換的錢 回傳給英雄
                    GamePage.HERO_Money = Money.Score;
                    GamePage.HERO_SCORE2=GamePage.HERO_SCORE;
                    GamePage.tR_MENU = true;

                    GamePage.HERO_LV++;

                    if (GamePage.HERO_LV==23)
                    {
                        GamePage.R_GAME_END = new GAME_END();
                        GamePage.LOCAL = "破關";//破關選單
                    }else{
                        GamePage.LOCAL = "選單";
                        getLvValue();
                    }
                }
                
            }


            if (Score.Score != 0 && Score.Score - NT >= NT)
            {
                Score.Score -= NT;
                Money.Score += 1;
            }
            else
            {
                Score.Score = 0;
                Money.Score = Temp_Money;
                T = true;//已算完
            }
        }


        public void Draw(SpriteBatch P)
        {
            Score.draw(P);
            Money.draw(P);
            SCORE_VIM.draw(P);
        }

        public void auto()
        {
            //當分數還沒出現時 不允許電腦自動算
            if (Num1>0)
            {
                return;
            }



            //開始計算
            if(!T){
                Score.Score = 0;
                Money.Score = Temp_Money;
                T = true;//已算完
            }
        }



        void getLvValue()
        {
            int N = 0;
            
            switch (GamePage.HERO_LV)
            {
                case 1: N = 3; break;
                case 2: N = 3; break;
                case 3: N = 3; break;
                case 4: N = 3; break;
                case 5: N = 3; break;
                case 6: N = 3; break;
                case 7: N = 3; break;
                case 8: N = 2; break;
                case 9: N = 2; break;
                case 10: N = 1; break;
                default: N = 1; break;
            }
            
            GamePage.HERO_R += N;
        }
    }
}
