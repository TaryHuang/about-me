using System;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using System.Linq;
using TARY_Library;
namespace hero
{
    public class MENU_DEAD
    {
        TARY_VIMG HERO;//英雄圖片
        TARY_TIMER Time;
        TARY_VIMG GAMEOVER;//圖片
        TARY_VIMG GAMESCORE;//圖片
        TARY_SCORE SCORE;


        TARY_SCORE LIFE;
        int GP=0;//若是重生 將編制 第幾群組

        public MENU_DEAD(int gp)
        {
            GamePage.HERO_LIFE--;
            GP = gp;
            HERO = new TARY_VIMG(GamePage.picHERO, new Vector2(180, 280));
            LIFE = new TARY_SCORE(GamePage.picNum, new Vector2(240, 280));
            LIFE.Prefix = "× ";
            LIFE.Score = GamePage.HERO_LIFE;


            GAMEOVER = new TARY_VIMG(GamePage.picGAMEOVER, new Vector2(90, 150));

            GAMESCORE = new TARY_VIMG(GamePage.picSCORE, new Vector2(40, 400));
            GAMESCORE.Size = 2;

            SCORE = new TARY_SCORE(GamePage.picNum, new Vector2(200, 400));
            SCORE.Score = GamePage.HERO_SCORE;
            SCORE.Size = 2;
            SCORE.ScoreV = 7;

            Time = new TARY_TIMER(1, 200);
            Time.start();

        }


        public void update()
        {
            Time.UPDATE();
            if (Time.Time == 0)
            {
                //回到遊戲或是回到遊戲選單介面
                if (GamePage.HERO_LIFE > 0)
                {
                    GamePage._LV = null;
                    GamePage._HERO = null;


                    //重新配置關卡及英雄
                    GamePage.R_MFired.clear();//清除子彈
                    GamePage.R_LV = new LV(GamePage.HERO_LV, GP);
                    GamePage.R_HERO = new HERO(GamePage.HERO_LOC);
                    GamePage.R_BAR.ResetBtn();



                    //攻擊力
                    GamePage.R_HERO.setATK((int)(GamePage.HERO_A2));
                    //連續發射
                    GamePage.R_BAR.tempMove = GamePage.HERO_B - (int)(GamePage.HERO_B2*0.6);
                    //子彈數量
                    GamePage.R_HERO.setbullet(GamePage.HERO_C2);
                    //移動速度
                    GamePage.R_HERO.setF(GamePage.HERO_D + GamePage.HERO_D2);
                    //HP量
                    GamePage.R_HERO.setHP(GamePage.HERO_E2);



                    GamePage.LOCAL = "遊戲";
                }
                else
                {
                    //刪除紀錄~~~~~
                    DelRecord();
                    AddSCORE();//將資訊寫進 遊戲分數資料表中
                    GamePage.LOCAL = "死亡離開遊戲";
                }
            }

        }



        public static void  DelRecord(){
            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.CNAME == "HERO" 
                            select Contacts;

            Contacts A = tContacts.First();
            A.XML = null;
            tDBHandler.SubmitChanges();
        }




        public void AddSCORE() { 
        //腳色死亡 將分數寫回資料庫

            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            Contacts_Score DATA = new Contacts_Score();
            DATA.Lv = GamePage.HERO_LV;
            DATA.Score = GamePage.HERO_SCORE;
            DATA.Datetime = DateTime.Now;

            tDBHandler.Contacts_Score.InsertOnSubmit(DATA);
            tDBHandler.SubmitChanges();
        }






        public void Draw(SpriteBatch P){


            HERO.draw(P);
            LIFE.draw(P);
            if (GamePage.HERO_LIFE <= 0)
            {
                GAMEOVER.draw(P);
                SCORE.draw(P);
                GAMESCORE.draw(P);
            }
        }

    }
}
