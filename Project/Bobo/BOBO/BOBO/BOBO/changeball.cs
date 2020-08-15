using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Input.Touch;


namespace BOBO
{
    public class changeball
    {

        DBHandler tDBHandler = new DBHandler(DBHandler.DBConnection);


        BTN BTNINFO = new BTN(Game1.picINFO, new Vector2(800 - Game1.picINFO.Width-20,0));
        setupA AAA;//size球體大小
        bool[] AAAbol = new bool[3];
        int AAAValue = 0;
        BTN[] AAAary0 = { new BTN(Game1.picballsort250), new BTN(Game1.picballsort200), new BTN(Game1.picballsort150) };
        BTN[] AAAary1 = { new BTN(Game1.picballsort251), new BTN(Game1.picballsort201), new BTN(Game1.picballsort151) };


        setupB BBB;//sort球體款式
        int BBBValue = 0;
        bool[] BBBbol = new bool[3];
        BTN[] BBBary0 = { new BTN(Game1.picballsortA0), new BTN(Game1.picballsortB0), new BTN(Game1.picballsortC0) };
        BTN[] BBBary1 = { new BTN(Game1.picballsortA1), new BTN(Game1.picballsortB1), new BTN(Game1.picballsortC1) };


        TouchLocation touchLocation;


        public changeball()
        {
            setAB();
            AAA = new setupA(new BTN(Game1.picSize, new Vector2(0, 100)), AAAary0, AAAary1, AAAbol, AAAValue);
            BBB = new setupB(new BTN(Game1.picSort, new Vector2(0, 250)), BBBary0, BBBary1, BBBbol, BBBValue);      
        }



        public void UPDATE()
        {
            AAA.update();
            BBB.update();



            for (int i = 0; i < Game1.touchState.Count; i++)
            {
                touchLocation = Game1.touchState[i];

                if (Game1.touchState[i].State == TouchLocationState.Released)
                {
                    if (BTNINFO.touchXY(touchLocation.Position.X, touchLocation.Position.Y))
                    {
                        Game1.GameState = 12;
                        return;
                    }
                }
            }
        }


        public void Draw()
        {
            AAA.draw();
            BBB.draw();
            BTNINFO.draw();
        }







        public void setAB()
        {
            
            

            var tContacts = from Contacts in tDBHandler.Contacts
                            where Contacts.ERI == "SYSTEM"
                            select Contacts;

            Contacts DATA = tContacts.First();
            AAAValue = DATA.SIZE;
            BBBValue = DATA.SORT;
            //--------------------------------------------------------------


            AAAbol[0]=true;
            AAAbol[1] = getLVsum(1,7, 9900);
            AAAbol[2] = getLVsum(1,15,19800);


            BBBbol[0] = true;
            BBBbol[1] = getLVsum(1,4, 3960);
            BBBbol[2] = getLVsum(1, 12, 15840);


        }


        public bool getLVsum(int S,int E,int total)
        {

            int t=0;

            for(int i=S;i<=E;i++){
                var tContacts2 = from Contacts2 in tDBHandler.Contacts2
                                 where Contacts2.LVNO == i && Contacts2.T == 1
                                 orderby Contacts2.Timer ascending
                                 select Contacts2;

                int j = 0;
                foreach (Contacts2 V in tContacts2)
                {
                    j++;
                }



                if(j!=0){
                    Contacts2 temp = tContacts2.First();
                    t += temp.Timer;
                }else{
                    return false;
                }
            }
            //-------------------------------------------

            if (t<=total)
            {
                return true;
            }

            return false;
        }
    }
}
