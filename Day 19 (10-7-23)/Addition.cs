using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Additon
{
    internal class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Eneter two Numbers:");

            
            int Number1 = Convert.ToInt32(Console.ReadLine());

            
            int Number2 = Convert.ToInt32(Console.ReadLine());

            int Result = Number1 + Number2;
            Console.WriteLine($"The Sum is: {Result}");
            Console.WriteLine($"The Sum is: {Number1 + Number2}");
            Console.ReadKey();

        }
    }
}
