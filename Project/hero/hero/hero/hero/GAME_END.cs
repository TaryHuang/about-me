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
    public class GAME_END
    {

        TARY_TIMER Time;
        TARY_VIMG GAMEEND, GAMESCORE;//圖片
        TARY_SCORE SCORE;
        TARY_BOB[] bob = new TARY_BOB[40];
        int bobPtr = -2;
        public Texture2D ColorStar;
        public GAME_END()
        {

            Time = new TARY_TIMER(1, 350);
            Time.start();


            GAMEEND = new TARY_VIMG(GamePage.picGAMEEND, new Vector2(15, 140));
            GAMEEND.Size = 2;
            GAMESCORE = new TARY_VIMG(GamePage.picSCORE, new Vector2(60, 300));
            GAMESCORE.Size = 2;
            SCORE = new TARY_SCORE(GamePage.picNum, new Vector2(150, 300));
            SCORE.Score = GamePage.HERO_SCORE;
            SCORE.Size = 2;
            SCORE.ScoreV = 7;


            for (int i = 0; i < bob.Count(); i++)
            {

                           switch(GamePage.randObj.Next(1,8)){
                                case 1: ColorStar = GamePage.picStar7; break;//白色為6   star1為背景色
                                case 2: ColorStar = GamePage.picStar2; break;
                                case 3: ColorStar = GamePage.picStar3; break;
                                case 4: ColorStar = GamePage.picStar4; break;
                                case 5: ColorStar = GamePage.picStar5; break;
                                case 6: ColorStar = GamePage.picStar6; break;
                                case 7: ColorStar = GamePage.picStar8; break;
                            }

                           bob[i] = new TARY_BOB(ColorStar, new Vector2(GamePage.randObj.Next(10, 470), GamePage.randObj.Next(10, 750)), GamePage.randObj.Next(15, 80));
            }
        }


        public void update()
        {
            Time.UPDATE();

            if (Time.Time%12==0)
            {
                bobPtr++;
                if(bobPtr>=0){
                    bob[bobPtr].start();

                    GamePage.effectMonsterDead.Play(GamePage.randObj.Next(3, 11) * 0.1f, -2* 0.1f, 0);
                }
            }

            for (int i = 0; i < bob.Count(); i++)
            {
                bob[i].update();
            }





            if (Time.Time == 0)
            {
                    //刪除紀錄~~~~~
                    DelRecord();
                    AddSCORE();//將資訊寫進 遊戲分數資料表中
                    GamePage.LOCAL = "死亡離開遊戲";//破關離開遊戲 ＂共用＂
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
            DATA.Score = GamePage.HERO_SCORE2;
            DATA.Datetime = DateTime.Now;

            tDBHandler.Contacts_Score.InsertOnSubmit(DATA);
            tDBHandler.SubmitChanges();
        }






        public void Draw(SpriteBatch P){

            if (bobPtr>=0)
            {
                for (int i = 0; i < bobPtr; i++)
                {
                    bob[i].Draw(P);
                }
            }



            GAMEEND.draw(P);
            GAMESCORE.draw(P);
            SCORE.draw(P);

        }

    }
}
