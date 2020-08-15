using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
using Microsoft.Xna.Framework.Input.Touch;



namespace BOBO
{
    class setupA
    {
        BTN btnchked, btnTitle;
        BTN[] btns;//關閉
        BTN[] btns2;//開放
        bool[] btnsT;//是否開放
        int chked = 0;



        float zx = 0;
        float zy = 0;
        TouchLocation touchLocation;



        public setupA(BTN bT, BTN[] btn, BTN[] btn2, bool[] btnT, int chk)
        {
            btns = btn;
            btns2 = btn2;
            chked = chk;
            btnTitle = bT;

            btnsT = btnT;



            for (int i = 0; i < btns.Length; i++)
            {
                if (i == 0)
                {
                    zx = btnTitle.loc.X + btnTitle.img.Width;
                    zy = btnTitle.loc.Y;
                }
                else
                {
                    zx += btns[i - 1].img.Width;
                }

                btns[i].loc.X = zx;
                btns[i].loc.Y = zy;

                btns2[i].loc.X = zx;
                btns2[i].loc.Y = zy;
            }


            btnchked = new BTN(Game1.picballsort, new Vector2(btns[chked].loc.X, btns[chked].loc.Y));
        }



        public void update()
        {

            for (int i = 0; i < Game1.touchState.Count; i++)
            {
                touchLocation = Game1.touchState[i];




                if (Game1.touchState[i].State == TouchLocationState.Released)
                {


                    for (int j = 0; j < btns.Length; j++)
                    {
                        if (!btnsT[j])
                        {
                            continue;//代表此按鈕不開放
                        }



                        //按鈕
                        if (btns[j].touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                        {

                            chked = j;
                            btnchked.loc.X = btns[chked].loc.X;
                            btnchked.loc.Y = btns[chked].loc.Y;
                            updateBefore();
                            return;
                        }
                    }//for
                }//if
            }//for
        }


        public void draw()
        {
            for (int i = 0; i < btns.Length; i++)
            {
                if (btnsT[i])
                {
                    btns2[i].draw();
                }else{
                    btns[i].draw();
                }

            }
            btnTitle.draw();
            btnchked.draw();
        }



        public int getchked()
        {
            return chked;
        }


        public void setchked(int v)
        {
            chked =  v;
            btnchked.loc.X = btns[chked].loc.X;
            btnchked.loc.Y = btns[chked].loc.Y;
        }



        public void updateBefore()
        {
            //當系統更新後...要做哪些事情


            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.ERI == "SYSTEM"
                            select Contacts;
            Contacts tSpecContact = tContacts.First();
            tSpecContact.SIZE = chked;



            tDBHandler.SubmitChanges();

        }
    }
}
