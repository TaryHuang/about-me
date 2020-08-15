using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;

using Microsoft.Xna.Framework.Input;
using Microsoft.Xna.Framework.Input.Touch;


namespace BOBO
{
    public class GameLv
    {
        touch[] box;
        TouchLocation touchLocation;
        //製作選擇關卡介面
        //p代表 使用者能玩的關卡 
        //若p=7  代表1234567都能玩 大於7的關卡數則無法進入遊戲
        public GameLv()
        {
            box = new touch[Game1.picGameLv.Count()];

            int ZxAll = 50;
            int ZyAll = 50;
            int xx = 100;
            int Zx = 0;
            int Zy = 100;
            int Zlv = 0;

            for (int i = 0; i < box.Count(); i++)
            {

                if (i % 5 == 0 && i != 0)
                {
                    Zlv++;
                    Zx = xx;
                }
                else
                {
                    Zx +=xx;
                }



                if (i+1 <= getP())
                {
                    box[i] = new touch(Game1.picGameLv[i], new Vector2(ZxAll + Zx, ZyAll + Zy * Zlv));
                }else{
                    box[i] = new touch(Game1.picGameLv2[i], new Vector2(ZxAll + Zx, ZyAll + Zy * Zlv));
                    box[i].Stop = true; //停用此按鈕
                }


                box[i].GV = i + 1;



            }
        }


        public int getP()
        {
            int p = 0;
            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.ERI == "SYSTEM"
                            select Contacts;
            //執行LINQ to SQL語法，將實際資料轉至Collection物件
            foreach (Contacts tItem in tContacts)
            {
                p = tItem.LVNO;
            }

            return p;
        }









        //遊戲關卡選擇介面
        public void UPDATE()
        {
            for (int i = 0; i < Game1.touchState.Count; i++)
            {
                touchLocation = Game1.touchState[i];


                if (Game1.touchState[i].State == TouchLocationState.Pressed)
                {
                    for (int j = 0; j < box.Count(); j++)
                    {
                        if (!box[j].Stop && box[j].touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                        {
                            Game1.Lv = box[j].GV;//把選擇的關卡回傳
                            Game1.Game = new Lv(Game1.Lv);
                            Game1.GameState = 2;
                        }
                    }
                }
            }//for

        }


        //遊戲關卡選擇介面畫圖
        public void Draw()
        {

            for (int i = 0; i < box.Count();i++ )
            {
                box[i].Draw();
            }
        }

    }
}
