using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace hero
{
    interface LV_IF
    {
        List<MONSTER_IF> getMonster(int group);
        
        int getGROUP{ get; }
        int getNextTime{ get; }
        void R3(int n);
        void R2(int n);
    }
}
