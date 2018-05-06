#include<stdio.h>
#define INFINITY 9999
#define MAX 10

void dijkstra(int G[MAX][MAX],int n,int startnode);
int x[10] = {};
char* cities[11] = {"","New Delhi","Jaipur","Mumbai","Panaji","Bangalore","Kochi","Chennai","Hyderabad","Bhubaneshwar","Guwahati"};


int main()
{
    /*int distances[10][10] = { {0,261,0,0,2153,0,0,0,0,1976},
                                {261,0,1146,0,2002,0,0,0,0,0},
                                {0,1146,0,571,985,0,0,0,0,0},
                                {0,0,571,0,593,789,0,0,0,0},
                                {2153,2002,985,593,0,548,346,570,1417,2860},
                                {0,0,0,789,548,0,693,0,0,0},
                                {0,0,0,0,346,693,0,627,0,0},
                                {0,0,0,0,570,0,627,0,1050,0},
                                {0,0,0,0,1417,0,0,1050,0,1442},
                                {1976,0,0,0,2860,0,0,0,1442,0}
                            };
    */
    //Reading from a file
    FILE *myFile;
    myFile = fopen("somenumbers.txt", "r");
    int distances[MAX][MAX];
    int G[MAX][MAX],i,j,n,u;
	if (myFile == NULL){
        printf("Error Reading File\n");
    }
	for (i = 0; i < MAX; i++)
		for(j=0;j < MAX; j++)
	{
        fscanf(myFile, "%d,", &distances[i][j]);
    }
	fclose(myFile);
	
	printf("ROAD TRIP PLANNER\n");
	printf("-----------------");
    printf("\n\nCITIES TO VISIT IN INDIA \n1.New Delhi \n2.Jaipur \n3.Mumbai \n4.Panaji \n5.Bangalore \n6.Kochi \n7.Chennai \n8.Hyderabad \n9.Bhubaneshwar \n10.Guwahati\n");
    printf("\nEnter the no. of cities to visit:\n");
    scanf("%d",&n);
    for(i=0;i<n;i++)
    {
        printf("Enter serial no. of city no.%d(index %d):",i+1,i);
        scanf("%d",&x[i]);
    }
    for(i=0;i<n;i++)
        for(j=0;j<n;j++)
                G[i][j] = distances[x[i]-1][x[j]-1];

    printf("\nEnter the index no. of starting city:");
    scanf("%d",&u);
    dijkstra(G,n,u);

    return 0;
}

void dijkstra(int G[MAX][MAX],int n,int startnode)
{

    int cost[MAX][MAX],distance[MAX],pred[MAX];
    int visited[MAX],count,mindistance,nextnode,i,j;
	
	//pred[] stores the predecessor of each node
	//count counts the number of nodes seen so far
	//create the cost matrix    
    for(i=0;i<n;i++)
        for(j=0;j<n;j++)
            if(G[i][j]==0)
                cost[i][j]=INFINITY;
            else
                cost[i][j]=G[i][j];

    //Initializing pred[], distance[], visited[]
    for(i=0;i<n;i++)
    {
        distance[i]=cost[startnode][i];
        pred[i]=startnode;
        visited[i]=0;
    }

    distance[startnode]=0;
    visited[startnode]=1;
    count=1;

    while(count<n-1)
    {
        mindistance=INFINITY;
		
		//nextnode gives the node at minimum distance        
        for(i=0;i<n;i++)
            if(distance[i]<mindistance&&!visited[i])
            {
                mindistance=distance[i];
                nextnode=i;
            }

            //Check if a better path exists through nextnode
            visited[nextnode]=1;
            for(i=0;i<n;i++)
                if(!visited[i])
                    if(mindistance+cost[nextnode][i]<distance[i])
                    {
                        distance[i]=mindistance+cost[nextnode][i];
                        pred[i]=nextnode;
                    }
        count++;
    }
    
    //Print the path and distance of each node
   	for(i=0;i<n;i++)
   	{
	 if(i!=startnode)
        {	
        	if(distance[i] == INFINITY)
			{
				distance[i] = 0;
				printf("\nSame source and destination!!!");
			}        	
            printf("\nDistance from %s to %s=%d",cities[x[startnode]],cities[x[i]],distance[i]);
            //printf("\nPath=%d",i);
			printf("\nPath = %s",cities[x[i]]);
            j=i;
            do
            {
                j=pred[j];
                printf("<-%s",cities[x[j]]);
            }while(j!=startnode);
    	}
	}
}



