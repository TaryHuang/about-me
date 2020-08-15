using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class Pass
    {

        Texture2D pic;
        Vector2 pos1;

        
        public bool passT = false;//TRUE代表已經破關..訊號
        public BoundingSphere H = new BoundingSphere();//感應器

        public Pass(Texture2D p1, Vector2 pos1)
        {
            pic = p1;
            setPos(pos1);


            H.Radius = 12.5f;//設半徑
            Haction();
        }

        public void setPos(Vector2 p1)
        {
            pos1=p1;
        }



        //破關回寫資料庫關卡資訊
        public void setP(int p,int timer)
        {
            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            if(getP()==p){

                var tContacts = from Contacts in tDBHandler.Contacts
                                where Contacts.ERI == "SYSTEM"
                                select Contacts;
                Contacts tSpecContact = tContacts.First();
                tSpecContact.LVNO = p+1;
            }//判斷資料庫關卡是否要+1


            //將此場關卡及秒數存進資料庫
            Contacts2 AAA = new Contacts2();
            AAA.LVNO = p;
            AAA.Timer = timer;
            AAA.T = 1;
            tDBHandler.Contacts2.InsertOnSubmit(AAA);


            tDBHandler.SubmitChanges();
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



        public void Draw()
        {

           Game1.P.Draw(pic, pos1, Color.White);
        }

        public void Haction()
        {
            /*
            int Z = 8;
            H.Min = new Vector3(pos1.X + Z, pos1.Y + Z, 0);
            H.Max = new Vector3(pos1.X + pic.Width - Z, pos1.Y + pic.Height - Z, 0);
            */

            
            H.Center = new Vector3(pos1.X + 12.5f, pos1.Y + 12.5f, 0f);
        }


    }
}
