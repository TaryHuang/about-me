using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Navigation;
using System.Windows.Shapes;
using Microsoft.Phone.Controls;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Content;
using Microsoft.Xna.Framework.Graphics;
using TARY_Library;

namespace hero
{
    public class MonsterFired
    {
        List<ball_M> monsterBalls = new List<ball_M>();//怪物所發射的攻擊


        public void update()
        {
            for (int i = 0; i < monsterBalls.Count; i++)
            {

                //判定生命是否存在
                if (!monsterBalls[i].life())
                {
                    monsterBalls.RemoveAt(i);
                    continue;
                }

                monsterBalls[i].update();
            }

        }

        public void Draw(SpriteBatch P){
            for (int i = 0; i < monsterBalls.Count; i++)
            {
                monsterBalls[i].Draw(P);
            }
        }


        public void Add(ball_M M)
        {
            monsterBalls.Add(M);
        }





        //英雄是否被子彈打到..
        public int Heroloss(BoundingSphere H)
        {

            for (int i = 0; i < monsterBalls.Count; i++)
            {
                if (monsterBalls[i].H.Intersects(H))
                {
                    int p = GamePage.randObj.Next(0,90);//可以閃避子彈攻擊
                    if (p >= GamePage.HERO_D2)
                    {
                        int b = monsterBalls[i].loss;
                        monsterBalls.RemoveAt(i);//子彈擊中英雄
                        return b;//回傳損失多少血
                    }
                    else
                    {
                        GamePage.R_HERO.Withstand();
                        monsterBalls.RemoveAt(i);//子彈擊中英雄 但被檔掉了
                    }
                }
            }
            return 0;//沒被擊中
        }


        public void clear()
        {
            monsterBalls.Clear();
        }

        public int Count()
        {
            return monsterBalls.Count();
        }
    }


}
