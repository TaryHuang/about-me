using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using System.Diagnostics;

namespace English
{
    public class C1
    {
        Random Rnd = new Random();
        public int ptr;//指標
        public string CWORD;
        public string EWORD;
        public List<int> EWORD_Q=new List<int>();//刻漏字 漏洞的字元
        string input="";
        public bool isCorrect = false;//答案是否正確



        public C1(int ptr,string CWORD,string EWORD){
            this.ptr = ptr;
            this.CWORD = CWORD;
            this.EWORD = EWORD;


            EWORD2_MAKE();
        }



        //只有A-Z或a-z可以製造漏洞
        void EWORD2_MAKE()
        {
            List<int> box=new List<int>();

            for (int i = 0; i < EWORD.Length;i++ )
            {
                if ((EWORD[i] >= 65 && EWORD[i] <= 90) || (EWORD[i] >= 97 && EWORD[i] <= 122))
                {
                    box.Add(i);
                }
            }


            if (box.Count == 0)
            {

            }
            else if (box.Count ==1 )
            {
                EWORD_Q.Add(box[0]);//只有一個字元 a  
            }
            else if (box.Count == 2)
            {
                //只有兩個字元 ab 就隨機挑一個  
                if (Rnd.Next(0, 2) == 1)
                {
                    EWORD_Q.Add(box[0]);
                }
                else
                {
                    EWORD_Q.Add(box[1]);
                }
            }
            else if (box.Count == 3)
            {
                //只有三個字元 abc 就隨機挑1個或2個  

                int R = Rnd.Next(0, 6);

                switch (R)
                {
                    case 0: EWORD_Q.Add(box[0]); break;
                    case 1: EWORD_Q.Add(box[1]); break;
                    case 2: EWORD_Q.Add(box[2]); break;
                    case 3: EWORD_Q.Add(box[0]); EWORD_Q.Add(box[1]); break;
                    case 4: EWORD_Q.Add(box[0]); EWORD_Q.Add(box[2]); break;
                    case 5: EWORD_Q.Add(box[1]); EWORD_Q.Add(box[2]); break;
                }
            }
            else if (box.Count == 4)
            {
                //只有四個字元 abc 就隨機挑1個或2個

                int R = Rnd.Next(0, 10);

                switch (R)
                {
                    case 0: EWORD_Q.Add(box[0]); break;
                    case 1: EWORD_Q.Add(box[1]); break;
                    case 2: EWORD_Q.Add(box[2]); break;
                    case 3: EWORD_Q.Add(box[3]); break;
                    case 4: EWORD_Q.Add(box[0]); EWORD_Q.Add(box[1]); break;
                    case 5: EWORD_Q.Add(box[0]); EWORD_Q.Add(box[2]); break;
                    case 6: EWORD_Q.Add(box[0]); EWORD_Q.Add(box[3]); break;
                    case 7: EWORD_Q.Add(box[1]); EWORD_Q.Add(box[2]); break;
                    case 8: EWORD_Q.Add(box[1]); EWORD_Q.Add(box[3]); break;
                    case 9: EWORD_Q.Add(box[2]); EWORD_Q.Add(box[3]); break;

                }
            }
            else if (box.Count >= 5 && box.Count <= 7)
            {
                //5~9個字以上的單字  最多空三格 且是連續的

                int R = Rnd.Next(0, box.Count - 3);

                for (int i = 0; i < 3; i++)
                {
                    EWORD_Q.Add(box[i + R]);
                }
            }
            else if (box.Count >= 8 && box.Count <= 9)
            {
                //8,0個字的單字  最多空4格 且是連續的

                int R = Rnd.Next(0, box.Count - 4);

                for (int i = 0; i < 4; i++)
                {
                    EWORD_Q.Add(box[i + R]);
                }
            }
            else
            {

                //10個字的單字  最多空5格 且是連續的

                int R = Rnd.Next(0, box.Count - 5);

                for (int i = 0; i < 5; i++)
                {
                    EWORD_Q.Add(box[i + R]);
                }

            }
            




        }



        //使用者輸入
        public string INPUT
        {
            get
            {
                return input;
            }
            set
            {
                if(isEnglish(value)){
                    //只有英文才可以登入
                    input = value;
                }
            }
        }



        public string EWORD_Test
        {
            get
            {
                string str = EWORD;//正確單字

                for (int i = 0; i < EWORD_Q.Count; i++)
                {

                    if(INPUT.Length>i){
                        
                        str = str.Substring(0, EWORD_Q[i]) + INPUT[i] + str.Substring(EWORD_Q[i] + 1);
                    }else{
                         str = str.Substring(0, EWORD_Q[i]) + "_" + str.Substring(EWORD_Q[i] + 1);
                    }

                }
                return ChangeEngBig(str);
            }
        }








        void clearINPUT(){
            INPUT = "";
        }



        //判斷是否為正確答案
        public bool Result()
        {
                string str = EWORD;//正確單字

                for (int i = 0; i < EWORD_Q.Count; i++)
                {

                    if (INPUT.Length > i)
                    {

                        str = str.Substring(0, EWORD_Q[i]) + INPUT[i] + str.Substring(EWORD_Q[i] + 1);
                    }
                    else
                    {
                        str = str.Substring(0, EWORD_Q[i]) + "_" + str.Substring(EWORD_Q[i] + 1);
                    }

                }


            if (EWORD == str)
            {
                return true;
            }
            
            return false;
        }




        public static bool isEnglish(string str){
            //只有大寫英文或小寫英文 才可以為true
            bool f = true;
            for (int i = 0; i < str.Length; i++)
            {
                if (!((str[i] >= 65 && str[i] <= 90) || (str[i] >= 97 && str[i] <= 122)))
                {
                    return false;
                }
            }

            return f;
        }



        public static string ChangeEngBig(string str){
            string S = "";
            for (int i = 0; i < str.Length;i++ )
            {
                switch (str[i])
                {
                    case 'A': S+="Ａ" ; break;
                    case 'B': S += "Ｂ"; break;
                    case 'C': S += "Ｃ"; break;
                    case 'D': S += "Ｄ"; break;
                    case 'E': S += "Ｅ"; break;
                    case 'F': S += "Ｆ"; break;
                    case 'G': S += "Ｇ"; break;
                    case 'H': S += "Ｈ"; break;
                    case 'I': S += "Ｉ"; break;
                    case 'J': S += "Ｊ"; break;
                    case 'K': S += "Ｋ"; break;
                    case 'L': S += "Ｌ"; break;
                    case 'M': S += "Ｍ"; break;
                    case 'N': S += "Ｎ"; break;
                    case 'O': S += "Ｏ"; break;
                    case 'P': S += "Ｐ"; break;
                    case 'Q': S += "Ｑ"; break;
                    case 'R': S += "Ｒ"; break;
                    case 'S': S += "Ｓ"; break;
                    case 'T': S += "Ｔ"; break;
                    case 'U': S += "Ｕ"; break;
                    case 'V': S += "Ｖ"; break;
                    case 'W': S += "Ｗ"; break;
                    case 'X': S += "Ｘ"; break;
                    case 'Y': S += "Ｙ"; break;
                    case 'Z': S += "Ｚ"; break;


                    case 'a': S += "ａ"; break;
                    case 'b': S += "ｂ"; break;
                    case 'c': S += "ｃ"; break;
                    case 'd': S += "ｄ"; break;
                    case 'e': S += "ｅ"; break;
                    case 'f': S += "ｆ"; break;
                    case 'g': S += "ｇ"; break;
                    case 'h': S += "ｈ"; break;
                    case 'i': S += "ｉ"; break;
                    case 'j': S += "ｊ"; break;
                    case 'k': S += "ｋ"; break;
                    case 'l': S += "ｌ"; break;
                    case 'm': S += "ｍ"; break;
                    case 'n': S += "ｎ"; break;
                    case 'o': S += "ｏ"; break;
                    case 'p': S += "ｐ"; break;
                    case 'q': S += "ｑ"; break;
                    case 'r': S += "ｒ"; break;
                    case 's': S += "ｓ"; break;
                    case 't': S += "ｔ"; break;
                    case 'u': S += "ｕ"; break;
                    case 'v': S += "ｖ"; break;
                    case 'w': S += "ｗ"; break;
                    case 'x': S += "ｘ"; break;
                    case 'y': S += "ｙ"; break;
                    case 'z': S += "ｚ"; break;
                    case ' ': S += "　"; break;
                    case '\'': S += "’"; break;
                    case '-': S += "－"; break;
                    case '_': S += "＿"; break;
                    case ',': S += ","; break;
                    case '.': S += "."; break;
                }
            }//FOR


            return S;
        }
    }
}
