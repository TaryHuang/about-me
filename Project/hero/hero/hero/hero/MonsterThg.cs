using System;
using System.Collections.Generic;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;
using Microsoft.Xna.Framework.Input.Touch;
namespace hero
{
    public class MonsterThg
    {
        List<OnePiece> Thing = new List<OnePiece>();//怪物所發射的攻擊


        int RnOne;
        public void update()
        {
            updateRn();


            for (int i = 0; i < Thing.Count; i++)
            {

                //判定生命是否存在
                if (!Thing[i].Life())
                {
                    Thing.RemoveAt(i);
                }
                else
                {
                    Thing[i].UPDATE();
                }
            }


            //判定英雄死了沒！！＊＊＊＊＊＊＊＊＊＊＊
            /*
            if(GamePage.R_HERO.dead || GamePage.R_LV.T_ScoreChgMoney){
                return;
            }
             */
            if (GamePage.R_HERO.dead)
            {
                return;
            }
            //＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊


            //判定是否寶物被英雄碰撞到

            for(int i=0;i<Thing.Count;i++){

                if (!Thing[i].T && GamePage.R_HERO.touchOnePiece(Thing[i].IMG.H))
                {
                    Thing[i].Event_GetOneP();
                }
            }




            /* 停止用手點選寶物
            for (int i = 0; i < Thing.Count; i++)
            {
                for (int j = 0; j < GamePage.touchState.Count; j++)
                {
                    GamePage.touchLocation = GamePage.touchState[j];

                    if (GamePage.touchState[j].State == TouchLocationState.Pressed)
                    {

                        if (!Thing[i].T && Thing[i].IMG.touchXY(GamePage.touchLocation.Position.X, GamePage.touchLocation.Position.Y))
                        {
                            Thing[i].Event_GetOneP();//得到寶物了
                            return;//防止重疊寶物點選
                        }
                    }
                }//for 感應器
            }//for 東西
            */
        }




        public void Draw(SpriteBatch P){
            for (int i = 0; i < Thing.Count; i++)
            {
                Thing[i].Draw(P);
            }
        }


        public void Add(OnePiece M)
        {
            Thing.Add(M);
        }



        public void clear()
        {
            Thing.Clear();
            RnOne = GamePage.randObj.Next(500,3000);
        }


        public void updateRn()
        {
            RnOne--;
            if (RnOne<=0)
            {
                RnOne = GamePage.randObj.Next(1200, 2000);
                Add(new OnePiece());
            }
        }

        public void move()
        {
            //所有的寶物開始移動 若已移動則速度變快
            for (int i = 0; i < Thing.Count; i++)
            {
                if (Thing[i].ADD_Y <= 3f)
                {
                    Thing[i].ADD_Y += 1f;
                }
            }
        }




    }


}
