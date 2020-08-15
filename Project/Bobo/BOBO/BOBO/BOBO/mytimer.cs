using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;
namespace BOBO
{
    class  mytimer
    {
        int N = 0;//計時器  
        string S = "";
        bool T = false;//計時器 是否開始計時 


        Vector2 pos = new Vector2(0,0);


        public void setPos(int x,int y)
        {
            pos = new Vector2(x,y);
        }


        public mytimer()
        {

        }
        public mytimer(int Lv)
        {

            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.ERI == "SYSTEM"
                             select Contacts;

            Contacts AAA = tContacts.First();

            if (AAA.LVNO == Lv)
            {
            var tContacts2 = from Contacts2 in tDBHandler.Contacts2
                             where Contacts2.LVNO == Lv && Contacts2.T == 0
                             orderby Contacts2.Timer descending
                            select Contacts2;

                int i=0;
                foreach(Contacts2 t in tContacts2){
                    i++;
                }

                if(i>0){
                    Contacts2 BBB = tContacts2.First();
                    setN(BBB.Timer);
                }else{
                    setN(0);
                }
            }else{
                setN(0);
            }
        }

        public void UPDATE()
        {
            if(T){
                N++;
            }
        }

        public void Draw(){
            S = changeStr(N);
            for (int i = 0; i < S.Length; i++)
            {
                Game1.P.Draw(changeImg(S[i].ToString()), new Vector2(pos.X + 20 * i, pos.Y), Color.White);
            }

        }





        public Texture2D changeImg(string str)
        {

            switch(str){
                case "0": return Game1.picTimer[0];
                case "1": return Game1.picTimer[1]; 
                case "2": return Game1.picTimer[2]; 
                case "3": return Game1.picTimer[3]; 
                case "4": return Game1.picTimer[4]; 
                case "5": return Game1.picTimer[5]; 
                case "6": return Game1.picTimer[6]; 
                case "7": return Game1.picTimer[7];
                case "8": return Game1.picTimer[8];
                case "9": return Game1.picTimer[9];
                case ":": return Game1.picTimerIcon;
                case "-": return Game1.picTimerIcon2;
            }

            return Game1.picTimer[0];
        }
        //將N數值轉成時間字串



        public string changeStr(int num)
        {

            int timeN= num ;//暫存時間
            string strH = "00", strM = "00", strS = "00";



            if (timeN == -1)
            {
                return "--:--:--";
            }



            if (timeN != 0)
            {
                //小時
                strH = changeStrV(timeN/118800);
                timeN -= 118800*(timeN / 118800);
                if (timeN != 0)
                {
                    //分鐘
                    strM = changeStrV(timeN / 1980);
                    timeN -= 1980*(timeN / 1980);

                    //秒
                    if (timeN != 0){
                        strS = changeStrV(timeN/33);
                    }
                }
            }


            return strH + ":" + strM + ":" + strS;
        }





        string changeStrV(int num)
        {

            if(num<10){
                return "0"+num.ToString();
            }

            return num.ToString();
        }






        public int getTime()
        {
            return N;
        }


        public void setN(int num)
        {
            N = num;
        }


        public void start()
        {
            T = true; 
        }

        public void stop()
        {
            T = false;
        }




        public int fast(int LVNO)
        {
            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            var tContacts2 = from Contacts2 in tDBHandler.Contacts2
                             where Contacts2.LVNO == LVNO && Contacts2.T == 1
                             orderby Contacts2.Timer ascending
                             select Contacts2;

            Contacts2 AAA = tContacts2.First();


            return AAA.Timer;
        }


        public void saveTimer(int LVNO)
        {


           //當此關卡未被破時,任何離開遊戲的形為 就將該saveTimer存起來
            DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);

            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.ERI == "SYSTEM"
                             select Contacts;

            Contacts AAA = tContacts.First();

            if (AAA.LVNO == LVNO)
            {
                Contacts2 BBB = new Contacts2();
                BBB.LVNO = LVNO;
                BBB.Timer = N;
                BBB.T = 0;
                tDBHandler.Contacts2.InsertOnSubmit(BBB);
            }


            tDBHandler.SubmitChanges();

        }


    }
}
