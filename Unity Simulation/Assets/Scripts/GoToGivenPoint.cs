using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class GoToGivenPoint : MonoBehaviour
{
    public Transform goal;
    public Transform intialPosition;
    private UnityEngine.AI.NavMeshAgent agent;       
    void Start ()
    {
        intialPosition = gameObject.GetComponent<Transform>();
        
        agent = GetComponent<UnityEngine.AI.NavMeshAgent>();
        
        if (agent == null)
        {
            print("GoToGivenPoint: no agent found.");
        }
        agent.destination = goal.position;
    }

    void Update()
    {
        if (goal.position == agent.transform.position)
        {
            
        }        
    }

    void OnCollisionEnter (Collision col)
    {
        if(col.gameObject.name == "Goal")
        {
            Destroy(col.gameObject);
            agent.destination = intialPosition.position;
        }
    }
}
